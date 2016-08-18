<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') &mdash; pandaac</title>

    <link href="{{ asset('/packages/pandaac/theme-tibia/img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ theme_elixir('/packages/pandaac/theme-tibia/css/app.css') }}" rel="stylesheet" media="all">

    @yield('head')

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-route="{{ route_path() }}" data-route-blueprint="{{ route_blueprint() }}" data-view="{{ view_path() }}">
    <a id="top"></a>

    <div id="skeleton">
        <aside id="left-column" class="column">
            <a id="logo-artwork" href="{{ url('/') }}"></a>

            <div id="login-box" class="box">
                <div class="inner-box">
                    @if (Auth::check())
                        <a href="{{ url('/account') }}" class="medium-button">
                            <img src="{{ asset('/packages/pandaac/theme-tibia/img/mediumbutton_myaccount.png') }}" alt="My Account">
                        </a>

                        <a href="{{ url('/account/logout') }}" class="logout"></a>
                    @else
                        <a href="{{ url('/account/login') }}" class="medium-button">
                            <img src="{{ asset('/packages/pandaac/theme-tibia/img/mediumbutton_playnow.png') }}" alt="Play Now">
                        </a>

                        <a href="{{ url('/account/create') }}" class="create-account"></a>
                    @endif
                </div>
            </div>

            <div id="navigation" class="box">
                <ul class="inner-box">
                    <li class="navigation-item open" data-v-class="open: isNavToggled('news')">
                        <div class="navigation-button" data-v-on="click: toggleNav('news')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-news.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-news.gif') }}" alt="News">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/') }}"><a href="{{ url('/') }}">Latest News</a></li>
                                <li class="{{ activate_menu('/archive') }}"><a href="{{ url('/archive') }}">News Archive</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('about')">
                        <div class="navigation-button" data-v-on="click: toggleNav('about')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-abouttibia.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-abouttibia.gif') }}" alt="About {{ server()->name() }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/about/server') }}"><a href="{{ url('/about/server') }}">What Is {{ server()->name() }}?</a></li>
                                <li class="{{ activate_menu('/about/screenshots') }}"><a href="{{ url('/about/screenshots') }}">Screenshots</a></li>
                                <li class="{{ activate_menu('/about/features') }}"><a href="{{ url('/about/features') }}">Game Features</a></li>
                                <li class="{{ activate_menu('/about/premium') }}"><a href="{{ url('/about/premium') }}">Premium Features</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('library')">
                        <div class="navigation-button" data-v-on="click: toggleNav('library')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-library.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-library.gif') }}" alt="Library">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/library/creatures') }}"><a href="{{ url('/library/creatures') }}">Creatures</a></li>
                                <li class="{{ activate_menu('/library/spells') }}"><a href="{{ url('/library/spells') }}">Spells</a></li>
                                <li class="{{ activate_menu('/library/achievements') }}"><a href="{{ url('/library/achievements') }}">Achievements</a></li>
                                <li class="{{ activate_menu('/library/quests') }}"><a href="{{ url('/library/quests') }}">World Quests</a></li>
                                <li class="{{ activate_menu('/library/experience') }}"><a href="{{ url('/library/experience') }}">Experience Table</a></li>
                                <li class="{{ activate_menu('/library/maps') }}"><a href="{{ url('/library/maps') }}">Maps</a></li>
                                <li class="{{ activate_menu('/library/genesis') }}"><a href="{{ url('/library/genesis') }}">Genesis</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('community')">
                        <div class="navigation-button" data-v-on="click: toggleNav('community')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-community.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-community.gif') }}" alt="Community">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/characters') }}"><a href="{{ url('/characters') }}">Characters</a></li>
                                <li class="{{ activate_menu('/worlds') }}"><a href="{{ url('/worlds') }}">Worlds</a></li>
                                <li class="{{ activate_menu('/highscore') }}"><a href="{{ url('/highscore') }}">Highscores</a></li>
                                <li class="{{ activate_menu('/statistics') }}"><a href="{{ url('/statistics') }}">Kill Statistics</a></li>
                                <li class="{{ activate_menu('/houses') }}"><a href="{{ url('/houses') }}">Houses</a></li>
                                <li class="{{ activate_menu('/guilds') }}"><a href="{{ url('/guilds') }}">Guilds</a></li>
                                <li class="{{ activate_menu('/polls') }}"><a href="{{ url('/polls') }}">Polls</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('forum')">
                        <div class="navigation-button" data-v-on="click: toggleNav('forum')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-forum.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-forum.gif') }}" alt="Forum">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/forum/world') }}"><a href="{{ url('/forum/world') }}">World Boards</a></li>
                                <li class="{{ activate_menu('/forum/trade') }}"><a href="{{ url('/forum/trade') }}">Trade Boards</a></li>
                                <li class="{{ activate_menu('/forum/community') }}"><a href="{{ url('/forum/community') }}">Community Boards</a></li>
                                <li class="{{ activate_menu('/forum/council') }}"><a href="{{ url('/forum/council') }}">Council Boards</a></li>
                                <li class="{{ activate_menu('/forum/support') }}"><a href="{{ url('/forum/support') }}">Support Boards</a></li>
                                <li class="{{ activate_menu('/forum/guild') }}"><a href="{{ url('/forum/guild') }}">Guild Boards</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('account')">
                        <div class="navigation-button" data-v-on="click: toggleNav('account')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-account.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-account.gif') }}" alt="Account">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/account') }}"><a href="{{ url('/account') }}">Account Management</a></li>
                                @if (! Auth::check())
                                    <li class="{{ activate_menu('/account/create') }}"><a href="{{ url('/account/create') }}">Create Account</a></li>
                                @endif
                                <li class="{{ activate_menu('/account/download') }}"><a href="{{ url('/account/download') }}">Download Client</a></li>
                                @if (! Auth::check())
                                    <li class="{{ activate_menu('/account/recover') }}"><a href="{{ url('/account/recover') }}">Lost Account?</a></li>
                                @endif
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item open" data-v-class="open: isNavToggled('support')">
                        <div class="navigation-button" data-v-on="click: toggleNav('support')">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/packages/pandaac/theme-tibia/img/icon-support.gif') }}" alt="Icon">
                            <img class="label" src="{{ asset('/packages/pandaac/theme-tibia/img/label-support.gif') }}" alt="Support">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li class="{{ activate_menu('/support/faq') }}"><a href="{{ url('/support/faq') }}">FAQ</a></li>
                                <li class="{{ activate_menu('/support/rules') }}"><a href="{{ url('/support/rules') }}">{{ server()->name() }} Rules</a></li>
                                <li class="{{ activate_menu('/support/tutor') }}"><a href="{{ url('/support/tutor') }}">Tutor Guide</a></li>
                                <li class="{{ activate_menu('/support/legal') }}"><a href="{{ url('/support/legal') }}">Legal Documents</a></li>
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

                    <a href="{{ url('/library/creatures', $creature->slug()) }}" class="monster"><img src="{{ cdn('creature-headers', ['creature' => $creature->slug()]) }}" alt="{{ $creature->name() }}"></a>
                @else
                    <a href="{{ url('/library/creatures') }}" class="monster"><img src="{{ cdn('creature-headers', ['creature' => 'fire-elemental']) }}" alt="Fire Elemental"></a>
                @endif
                <a href="{{ url('/worlds') }}" class="online">{{ app('player.online')->count() }}<br>Players Online</a>
            </div>

            <div class="box premium">
                <div class="inner-box">
                    <a href="#" class="green-button">
                        <span>Get Premium</span>
                    </a>
                </div>
            </div>

            @if (config('pandaac.theme-tibia.layout.social'))
                <div class="box networks">
                    <div class="inner-box">
                        
                    </div>
                </div>
            @endif

            <div class="box screenshots">
                <div class="inner-box">
                    <a href="{{ url('/about/screenshots') }}"><img src="{{ asset('/packages/pandaac/theme-tibia/img/screenshot.png') }}" alt="Screenshot"></a>
                </div>
            </div>
        </aside>

        <main id="middle-column" class="column">
            @yield('content')

            <div class="footer">
                The majority of images on this site are property of CipSoft GmbH.<br>
                <a href="https://pandaac.io" target="_blank">pandaac.io</a> |
                <a href="https://credits.pandaac.io" target="_blank">credits</a> |
                <a href="https://otland.net" target="_blank">otland.net</a>
            </div>
        </main>
    </div>

    <script>var baseurl = "{{ url('/') }}";</script>
    <script src="{{ theme_elixir('/packages/pandaac/theme-tibia/js/app.js') }}"></script>

    @yield('footer')

</body>
</html>
