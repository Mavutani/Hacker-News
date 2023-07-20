@extends('layouts.app')

@section('content')
<tr id="pagespace" title="" style="height:10px"></tr><tr><td><table border="0" cellpadding="0" cellspacing="0">
        @foreach ($highestScoreStory as $key => $story)
        @php
        $index = ($highestScoreStory->currentPage() - 1) * $highestScoreStory->perPage() + $loop->iteration;
        @endphp
            <tr class='athing' id='{{ $story->sid}}'>
                <td align="right" valign="top" class="title"><span class="rank">{{ $index }}.</span></td>
                <td valign="top" class="votelinks">
                  <center>
                    <a id='up_23201888' href='vote?id=23201888&amp;how=up&amp;goto=news'>
                      <div class='votearrow' title='upvote'></div>
                    </a>
                  </center>
                </td>
                <td class="title"><a href="{{ $story->url }}" class="storylink">{{ $story->title }}</a><span class="sitebit comhead"> (<a href="{{ $story->url }}"><span id="s{{$story->sid}}"></span></a>)</span></td>
                <script>
                    var url = "{{ $story->url }}";

                    var siteAddress = new URL(url).hostname;
                    document.getElementById("s{{$story->sid}}").textContent = siteAddress;
                </script>

              </tr>
              <tr>
                <td colspan="2"></td>
                <td class="subtext">
                  <span class="score" id="score_23201888">{{ $story->score }} points</span> by <a href="user?id=alokrai" class="hnuser">{{ $story->by }}</a> <span class="age"> | <span id="t{{$story->sid}}"></span></span> <span id="unv_23201888"></span> | <a href="hide?id=23201888&amp;goto=news">hide</a> | <a href="/item/{{ $story->sid}}">comments</a>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
                  <script>
                    var unixTime = {{$story->time}};
                    var formattedTime = moment.unix(unixTime).fromNow();
                    document.getElementById("t{{$story->sid}}").textContent = formattedTime;
                </script>
                </td>
              </tr>
        @endforeach
        <tr class="spacer" style="height:5px"></tr>
        <tr>
          <td style="color:black;">{{ $highestScoreStory->links('vendor.pagination.default') }}</td>
        </tr>
      </table>
    </td>
  </tr>
@endsection
