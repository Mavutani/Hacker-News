
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Hacker News') }}</title>
    <link rel="stylesheet" type="text/css" href="/config/css/news.css">
    <link rel="shortcut icon" href="/config/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="Hacker News" href="rss">
    <title>Hacker News</title>
    <script type="text/javascript" src="/config/js/dark.js"></script>
    </head>
    <body>
    <center>
      <table id="hnmain" border="0" cellpadding="0" cellspacing="0" width="85%">
        <tr>
          <td id="header">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:2px">
              <tr>
                <td style="width:18px;padding-right:4px"><a href="/"><img src="/config/images/y18.gif" width="18" height="18" style="border:1px white solid;"></a></td>
                <td style="line-height:12pt; height:10px;"><span class="pagetop"><b class="hnname"><a href="/">Hacker News</a></b>
                  <a href="/new">new</a> | <a href="/past">past</a> | <a href="/comments">comments</a> | <a href="/ask">ask</a> | <a href="/show">show</a> | <a href="https://news.ycombinator.com/jobs" target="_blank">jobs</a> | <a href="/submit">submit</a>
                </span>
                </td>
                <td style="text-align:right;padding-right:4px;"><span class="pagetop">
                    @guest
                    @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                @else
                           <a href="id={{ Auth::user()->name }}">{{ Auth::user()->name }}</a> (0) |
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                @endguest
                  </span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        @yield('content')
          <td>
            <img src="images/s.gif" height="10" width="0">
            <table width="100%" cellspacing="0" cellpadding="1">
              <tr>
                <td id="border"></td>
              </tr>
            </table>
            <br>
            <center><span class="yclinks"><a href="newsguidelines.html">Guidelines</a> | <a href="newsfaq.html">FAQ</a> | <a href="lists">Lists</a> | <a href="https://github.com/HackerNews/API">API</a> | <a href="security.html">Security</a> | <a href="https://www.ycombinator.com/legal/">Legal</a> | <a href="https://www.ycombinator.com/apply/">Apply to YC</a> | <a href="mailto:hn@ycombinator.com">Contact</a></span><br><br>
            <form method="get" action="//hn.algolia.com/">Search: <input type="text" name="q" size="17" autocorrect="off" spellcheck="false" autocapitalize="off" autocomplete="false"></form></center></td></tr>      </table></center></body>
                  <script type='text/javascript' src='hn.js?zo5mUIbu0WXL3v7NwfQE'></script>
            </center>
          </td>
        </tr>
      </table>
    </center>
  </body>
  <script type='text/javascript' src='/config/js/hn.js?fIA1WYHO2oSfVe60PsAM'></script>
</html>
