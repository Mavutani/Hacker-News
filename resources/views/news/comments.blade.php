@extends('layouts.app')
@section('content')
<tr id="pagespace" title="{{$ThisStory->title}}" style="height:10px"></tr><tr><td><table class="fatitem" border="0">
    <tr class='athing' id='36770047'>
  <td align="right" valign="top" class="title"><span class="rank"></span></td>      <td valign="top" class="votelinks"><center><a id='up_36770047' class='clicky' href='vote?id=36770047&amp;how=up&amp;auth=90626b593796aae2ed390aea309bf613731f0b05&amp;goto=item%3Fid%3D36770047'><div class='votearrow' title='upvote'></div></a></center></td><td class="title"><span class="titleline"><a href="https://blog.adafruit.com/2023/07/12/when-open-becomes-opaque-the-changing-face-of-open-source-hardware-companies/" rel="noreferrer">{{$ThisStory->title}}</a><span class="sitebit comhead"> (<a href="from?site=adafruit.com"><span class="sitestr">adafruit.com</span></a>)</span></span></td></tr><tr><td colspan="2"></td><td class="subtext"><span class="subline">
      <span class="score" id="score_36770047">139 points</span> by <a href="user?id=Santosh83" class="hnuser">Santosh83</a> <span class="age" title="2023-07-18T09:59:51"><a href="item?id=36770047">2 hours ago</a></span> <span id="unv_36770047"></span> | <a href="hide?id=36770047&amp;auth=90626b593796aae2ed390aea309bf613731f0b05&amp;goto=item%3Fid%3D36770047">hide</a> | <a href="https://hn.algolia.com/?query=When%20Open%20Becomes%20Opaque%3A%20The%20Changing%20Face%20of%20Open-Source%20Hardware%20Companies&type=story&dateRange=all&sort=byDate&storyText=false&prefix&page=0" class="hnpast">past</a> | <a href="fave?id=36770047&amp;auth=90626b593796aae2ed390aea309bf613731f0b05">favorite</a> | <a href="item?id=36770047">37&nbsp;comments</a>        </span>
          </td></tr>

          <tr style="height:10px"></tr><tr><td colspan="2"></td><td><form action="comment" method="post"><input type="hidden" name="parent" value="36770047"><input type="hidden" name="goto" value="item?id=36770047"><input type="hidden" name="hmac" value="3883955e934e998500222637d109928904cb27fc"><textarea name="text" rows="8" cols="80" wrap="virtual"></textarea><br><br>
            If you haven't already, would you mind reading about HN's <a href="newswelcome.html"><u>approach to comments</u></a> and <a href="newsguidelines.html#comments"><u>site guidelines</u></a>?<br><br>
            <input type="submit" value="add comment"></form></td></tr>  </table><br><br><table border="0" class='comment-tree'>
                @foreach ($comments as $comment)
                    <tr class='athing comtr' id='36789636'><td><table border='0'>  <tr>    <td class='ind' indent='0'><img src="s.gif" height="1" width="0"></td><td valign="top" class="votelinks">
              <center><a id='up_36789636' class='clicky' href='vote?id=36789636&amp;how=up&amp;auth=c249360f22ed6656c11e8c2db89dbfaa919b35b5&amp;goto=item%3Fid%3D36770047#36789636'><div class='votearrow' title='upvote'></div></a></center>    </td><td class="default"><div style="margin-top:2px; margin-bottom:-10px;"><span class="comhead">
                <a href="user?id=pclmulqdq" class="hnuser">{{$comment->by}}</a> <span class="age" title="2023-07-19T17:00:59"><a href="item?id=36789636">{{$comment->time}} minutes ago</a></span> <span id="unv_36789636"></span>          <span class='navs'>
                     | <a href="#36789458" class="clicky" aria-hidden="true">next</a> <a class="togg clicky" id="36789636" n="2" href="javascript:void(0)">[–]</a><span class="onstory"></span>          </span>
                          </span></div><br><div class="comment">
                          <span class="commtext c00">{{$comment->text}}.</span>
                      <div class='reply'>        <p><font size="1">
                              <u><a href="reply?id=36789636&amp;goto=item%3Fid%3D36770047%2336789636">reply</a></u>
                          </font>
              </div></div></td></tr>
                </table></td></tr>
          @endforeach



    </table></td></tr>
        </table>
<br><br>
</td></tr>
@endsection
