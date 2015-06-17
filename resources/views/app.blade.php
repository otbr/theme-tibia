<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &mdash; pandaac</title>

    <link href="{{ asset('/pandaac/theme-tibia/img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('/pandaac/theme-tibia/css/app.css') }}" rel="stylesheet" media="all">

    @yield('head')

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="@yield('body')">

    <section id="skeleton">
        <aside id="left-column" class="column">
            <a id="logo-artwork" href="{{ url('/') }}"></a>

            <div id="login-box" class="box">
                <div class="inner-box">
                    @if (Auth::check())
                        <a href="{{ url('/account') }}" class="medium-button">
                            <img src="{{ asset('/pandaac/theme-tibia/img/mediumbutton_myaccount.png') }}" alt="My Account">
                        </a>

                        <a href="{{ url('/account/logout') }}" class="logout"></a>
                    @else
                        <a href="{{ url('/account/login') }}" class="medium-button">
                            <img src="{{ asset('/pandaac/theme-tibia/img/mediumbutton_playnow.png') }}" alt="Play Now">
                        </a>

                        <a href="{{ url('/account/create') }}" class="create-account"></a>
                    @endif
                </div>
            </div>

            <div id="navigation" class="box">
                <ul class="inner-box">
                    <li class="navigation-item open">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-news.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-news.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Latest News</a></li>
                                <li><a href="{{ url('/archive') }}">News Archive</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-abouttibia.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-abouttibia.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/about/server') }}">What Is {{ server()->name() }}?</a></li>
                                <li><a href="{{ url('/about/screenshots') }}">Screenshots</a></li>
                                <li><a href="{{ url('/about/features') }}">Game Features</a></li>
                                <li><a href="{{ url('/about/premium') }}">Premium Features</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-library.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-library.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/library/creatures') }}">Creatures</a></li>
                                <li><a href="{{ url('/library/spells') }}">Spells</a></li>
                                <li><a href="{{ url('/library/achievements') }}">Achievements</a></li>
                                <li><a href="{{ url('/library/quests') }}">World Quests</a></li>
                                <li><a href="{{ url('/library/experience') }}">Experience Table</a></li>
                                <li><a href="{{ url('/library/maps') }}">Maps</a></li>
                                <li><a href="{{ url('/library/genesis') }}">Genesis</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-community.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-community.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/characters') }}">Characters</a></li>
                                <li><a href="{{ url('/worlds') }}">Worlds</a></li>
                                <li><a href="{{ url('/highscores') }}">Highscores</a></li>
                                <li><a href="{{ url('/statistics') }}">Kill Statistics</a></li>
                                <li><a href="{{ url('/houses') }}">Houses</a></li>
                                <li><a href="{{ url('/guilds') }}">Guilds</a></li>
                                <li><a href="{{ url('/polls') }}">Polls</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-forum.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-forum.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/forum/world') }}">World Boards</a></li>
                                <li><a href="{{ url('/forum/trade') }}">Trade Boards</a></li>
                                <li><a href="{{ url('/forum/community') }}">Community Boards</a></li>
                                <li><a href="{{ url('/forum/council') }}">Council Boards</a></li>
                                <li><a href="{{ url('/forum/support') }}">Support Boards</a></li>
                                <li><a href="{{ url('/forum/guild') }}">Guild Boards</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-account.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-account.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/account') }}">Account Management</a></li>
                                <li><a href="{{ url('/account/create') }}">Create Account</a></li>
                                <li><a href="{{ url('/account/download') }}">Download Client</a></li>
                                <li><a href="{{ url('/account/recover') }}">Lost Account?</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-support.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-support.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="{{ url('/support/faq') }}">FAQ</a></li>
                                <li><a href="{{ url('/support/rules') }}">{{ server()->name() }} Rules</a></li>
                                <li><a href="{{ url('/support/tutor') }}">Tutor Guide</a></li>
                                <li><a href="{{ url('/support/legal') }}">Legal Documents</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <aside id="right-column" class="column">
            <div id="pedestal">
                @if ($creature = Cache::get('pedestal.creature') ?: creatures()->random())
                    {{ ! Cache::has('pedestal.creature') ? Cache::put('pedestal.creature', $creature, 30) : null }}

                    <a href="{{ url('/library/creatures') }}" class="monster"><img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/header/{{ $creature->image() }}" alt="{{ $creature->name() }}"></a>
                @else
                    <a href="{{ url('/library/creatures') }}" class="monster"><img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/header/fire-elemental.gif" alt="Fire Elemental"></a>
                @endif
                <a href="{{ url('/whosonline') }}" class="online">{{ rand(0, 15000) }}<br>Players Online</a>
            </div>

            <div class="box premium">
                <div class="inner-box">
                    <a href="#" class="green-button">
                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="Get Premium">
                    </a>
                </div>
            </div>

            <div class="box networks">
                <div class="inner-box">
                    
                </div>
            </div>

            <div class="box screenshots">
                <div class="inner-box">
                    <a href="{{ url('/about/screenshots') }}"><img src="{{ asset('/pandaac/theme-tibia/img/screenshot.png') }}"></a>
                </div>
            </div>
        </aside>

        <section id="middle-column" class="column">
            @yield('content')
        </section>
    </section>


    <script>var baseurl = '{{ url("/") }}';</script>
    <script src="{{ asset('/pandaac/theme-tibia/js/vendor.min.js') }}"></script>
    <script src="{{ asset('/pandaac/theme-tibia/js/app.min.js') }}"></script>

    @yield('footer')

</body>
</html>
