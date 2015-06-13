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
                                <li><a href="#">News Archive</a></li>
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
                                <li><a href="#">What Is Tibia?</a></li>
                                <li><a href="#">Screenshots</a></li>
                                <li><a href="#">Game Features</a></li>
                                <li><a href="#">Premium Features</a></li>
                                <li><a href="#">About CipSoft</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-button">
                            <span class="crystals top"></span>
                            <img class="icon" src="{{ asset('/pandaac/theme-tibia/img/icon-gameguides.gif') }}">
                            <img class="label" src="{{ asset('/pandaac/theme-tibia/img/label-gameguides.gif') }}">
                            <span class="crystals bottom"></span>
                        </div>
                        <div class="navigation-content">
                            <ul>
                                <li><a href="#">Quickstart</a></li>
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Security Hints</a></li>
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
                                <li><a href="#">Spells</a></li>
                                <li><a href="#">Achievements</a></li>
                                <li><a href="#">World Quests</a></li>
                                <li><a href="#">Experience Table</a></li>
                                <li><a href="{{ url('/library/maps') }}">Maps</a></li>
                                <li><a href="#">Genesis</a></li>
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
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Worlds</a></li>
                                <li><a href="#">Highscores</a></li>
                                <li><a href="#">Kill Statistics</a></li>
                                <li><a href="#">Houses</a></li>
                                <li><a href="#">Guilds</a></li>
                                <li><a href="#">Polls</a></li>
                                <li><a href="#">Feedback Form</a></li>
                                <li><a href="#">Conventions</a></li>
                                <li><a href="#">Fansites</a></li>
                                <li><a href="#">Resellers</a></li>
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
                                <li><a href="#">World Boards</a></li>
                                <li><a href="#">Trade Boards</a></li>
                                <li><a href="#">Community Boards</a></li>
                                <li><a href="#">Council Boards</a></li>
                                <li><a href="#">Support Boards</a></li>
                                <li><a href="#">Guild Boards</a></li>
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
                                <li><a href="#">Account Management</a></li>
                                <li><a href="#">Create Account</a></li>
                                <li><a href="#">Download Client</a></li>
                                <li><a href="#">Lost Account?</a></li>
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
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Tibia Rules</a></li>
                                <li><a href="#">Tutor Guide</a></li>
                                <li><a href="#">Parents' Guide</a></li>
                                <li><a href="#">Legal Documents</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <aside id="right-column" class="column">
            <div id="pedestal">
                <a href="#" class="monster"><img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/header/demon.gif" alt="Monster"></a>
                <a href="#" class="online">{{ rand(0, 15000) }}<br>Players Online</a>
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
                    <a href="#"><img src="{{ asset('/pandaac/theme-tibia/img/screenshot.png') }}"></a>
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
