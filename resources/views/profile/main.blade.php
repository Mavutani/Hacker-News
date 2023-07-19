@extends('layouts.app')

@section('content')
<tr id="pagespace" title="Profile: {{ Auth::user()->name }}" style="height:10px"></tr><tr><td>
<form class="profileform" action="/xuser" method="post">
<input type="hidden" name="id" value="{{ Auth::user()->name }}">
<input type="hidden" name="hmac" value="0345e43eb707be468d3fe32120d0498c2c710524">
<table border="0"><tr class="athing">
<td valign="top">user:</td><td timestamp="1689589630"><a href="user?id=evansnkuna" class="hnuser"><font color="#3c963c">{{ Auth::user()->name }}</font></a></td></tr><tr><td valign="top">created:</td><td><a href="front?day=2023-07-17&birth=evansnkuna">1 day ago</a></td></tr><tr><td valign="top">karma:</td><td>0</td></tr><tr><td valign="top">about:</td><td style="overflow:hidden"><textarea name="about" rows="5" cols="60" wrap="virtual">{{ Auth::user()->about }}</textarea>&nbsp;<a href="formatdoc" tabindex="-1"><font size="-2" color="#afafaf">help</font></a></td></tr><tr><td></td><td><font size="2">Only admins see your email below. To share publicly, add to the 'about' box.</font></td></tr><tr><td valign="top">email:</td><td><input type="text" name="email" value="{{ Auth::user()->email }}" size="60"></td></tr><tr><td valign="top">showdead:</td><td><select name="showd"><option>yes</option><option selected="t">no</option></select></td></tr><tr><td valign="top">noprocrast:</td><td><select name="nopro"><option>yes</option><option selected="t">no</option></select></td></tr><tr><td valign="top">maxvisit:</td><td><input type="text" name="maxv" value="20" size="16"></td></tr><tr><td valign="top">minaway:</td><td><input type="text" name="mina" value="180" size="16"></td></tr><tr><td valign="top">delay:</td><td><input type="text" name="delay" value="0" size="16"></td></tr><tr><td valign="top"></td><td><a href="changepw"><u>change password</u></a></td></tr><tr><td></td><td><a href="submitted?id=evansnkuna"><u>submissions</u></a></td></tr><tr><td></td><td><a href="threads?id=evansnkuna"><u>comments</u></a></td></tr><tr><td></td><td><a href="hidden?id=evansnkuna"><u>hidden</u></a></td></tr><tr><td></td><td><a href="favorites?id=evansnkuna"><u>favorite submissions</u></a> / <a href="favorites?id=evansnkuna&amp;comments=t"><u>comments</u></a>&nbsp;<i> (publicly visible)</i></td></tr></table><br>
<input type="submit" value="update"></form><br><br>
</td></tr>
</table></center>
@endsection
