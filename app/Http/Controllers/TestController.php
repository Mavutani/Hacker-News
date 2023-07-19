<?php

namespace App\Http\Controllers;
use App\Models\Story;
use App\Models\recents;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    public function new()
{
    $response = Http::withOptions([
            'verify' => false,
            'timeout' => 15,
        ])
        ->get('https://hacker-news.firebaseio.com/v0/newstories.json');

    if ($response->successful()) {
        $storyIds = $response->json();

        if ($storyIds !== null) {
            $storyIds = array_slice($storyIds, 0, 500); // Limit to 500 stories

            $stories = [];
            foreach ($storyIds as $storyId) {
                $storyResponse = Http::withOptions([
                        'verify' => false,
                        'timeout' => 15,
                    ])
                    ->get("https://hacker-news.firebaseio.com/v0/item/{$storyId}.json");

                if ($storyResponse->successful()) {
                    $storyData = $storyResponse->json();

                    if (isset($storyData['url'])) {
                        // Check if story exists in the database
                        $existingStory = Story::where('sid', $storyData['id'])->first();

                        if ($existingStory === null) {
                            // Story doesn't exist, save it to the database
                            $story = new recents();
                            $story->sid = $storyData['id'];
                            $story->by = $storyData['by'];
                            $story->descendants = $storyData['descendants'];
                            $story->type = $storyData['type'];
                            $story->score = $storyData['score'];
                            $story->title = $storyData['title'];
                            $story->time = $storyData['time'];
                            $story->url = $storyData['url'];
                            // Add other fields as needed
                            $story->save();

                            $stories[] = $storyData; // Add the story data to the array
                        }
                    }
                }
            }

            // Process the stories or pass them to the view
            return view('news.new')->with('stories', $stories);
        }
    }

        // Handle the API request failure or null response
        $statusCode = $response->status();
        // Handle the error accordingly
    }
}
