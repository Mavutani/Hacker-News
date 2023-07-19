@extends('layouts.app')

@section('content')
<tr id="pagespace" title="" style="height:10px"></tr><tr><td>
<table border="0" cellpadding="0" cellspacing="0">
</table></td></tr>
<tr id="pagespace" title="Submit" style="height:10px">
</tr><tr><td><tr><td>
<form action="/r" method="post">
<input type="hidden" name="fnid" value="qTzKaNpQp0JhdfXSnXit19">
<input type="hidden" name="fnop" value="submit-page">
<script type="text/javascript">
function tlen(el) { var n = el.value.length - 80;
el.nextSibling.innerText = n > 0 ? n + ' too long' : ''; }
</script>
<table border="0"><tr>
<td>title</td>
<td>
<input type="text" name="title" value="" size="50" autofocus="t" oninput="tlen(this)" onfocus="tlen(this)">
<span style="margin-left:10px"></span>
</td>
</tr>
<tr>
<td>url</td>
<td>
<input type="url" name="url" value="" size="50">
</td>
</tr>
<tr>
<td>text</td>
<td><textarea name="text" rows="4" cols="49" wrap="virtual"></textarea></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit"></td>
</tr>
<tr style="height:20px"></tr>
<tr><td></td>
<td>Leave url blank to submit a question for discussion. If there
     is no url, text will appear at the top of the thread. If
     there is a url, text is optional.<br><br>
You can also submit via <a href="bookmarklet.html" rel="nofollow"><u>bookmarklet</u></a>.<br>
</td>
</tr>
</table>
</form>
</td></tr></td></tr>
  </table></center></body>
</html>
@endsection
