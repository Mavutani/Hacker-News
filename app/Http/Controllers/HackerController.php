<?php

namespace App\Http\Controllers;
use App\Models\Story;
use App\Models\Comment;
use App\Models\recents;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class HackerController extends Controller
{
    public function index()
    {
        // Retrieve the story with the highest score from the database
        $highestScoreStory = Story::orderBy('score', 'desc')->take(500)->paginate(30);

        // Process the stories here or pass them to the view
        return View::make('welcome')->with('highestScoreStory', $highestScoreStory);
    }


    public function new()
    {
        // Retrieve the all new story with  from the database
        $NewStory = recents::orderBy('created_at', 'desc')->take(500)->paginate(30);

        // Process the stories here or pass them to the view
        return View::make('news.new')->with('NewStory', $NewStory);
    }

    public function past()
    {

    }
    public function comments(Request $request,$sid) {
            $ThisStory = Story::where('sid', $request->sid)->first();
            $storyId = $sid;
            $story = Story::find($storyId);

            $response = Http::withOptions([
                'verify' => false,
                'timeout' => 15,
            ])
            ->get("https://hacker-news.firebaseio.com/v0/item/{$storyId}.json");

            if ($response->successful()) {
                $storyData = $response->json();

                // Check if the story is a valid item and has kids (comments)
                if (isset($storyData['kids'])) {
                    $comments = [];

                    foreach ($storyData['kids'] as $commentId) {
                        $comment = Comment::where('cid', $commentId)->first();

                        if ($comment) {
                            // Comment already exists in the database, skip saving
                            $comments[] = $comment;
                            continue;
                        }

                        $commentResponse = Http::withOptions([
                            'verify' => false,
                            'timeout' => 15,
                        ])
                        ->get("https://hacker-news.firebaseio.com/v0/item/{$commentId}.json");

                        if ($commentResponse->successful()) {
                            $commentData = $commentResponse->json();

                            // Check if the 'text' key exists in the comment data
                            if (isset($commentData['text'])) {
                                // Create a new Comment model instance
                                $comment = new Comment();
                                $comment->parent = $storyId;
                                $comment->cid = $commentId;
                                $comment->by = $commentData['by'];
                                $comment->text = $commentData['text'];
                                $comment->time = $commentData['time'];
                                $comment->type = $commentData['type'];
                                // Save the comment to the database
                                $comment->save();
                                $comments[] = $comment;
                            }
                        }
                    }

                    // $comments now contains the comments associated with the story ID
                    return view('news.comments', ['comments' => $comments,'ThisStory' => $ThisStory]);
                }
            } else {
                // Handle the case when the API request was not successful
                dd('Error fetching story details');
            }
        }
    public function ask()
    {

    }
    public function show()
    {

    }

    public function submit()
    {
        return View::make('news.submit');
    }
}
