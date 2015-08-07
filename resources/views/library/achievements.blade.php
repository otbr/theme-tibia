@extends('theme::app')

@section('title', 'Achievements')
@section('body', 'library-achievements')
@section('navigation', '/library/achievements')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Achievements</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="notification">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td align="center" valign="middle">
                                    <div class="padding">
                                        [<a href="#grade-1">Grade 1</a>]
                                        [<a href="#grade-2">Grade 2</a>]
                                        [<a href="#grade-3">Grade 3</a>]
                                        [<a href="#grade-4">Grade 4</a>]
                                        [<a href="#secret">Secret Achievements</a>]
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>

                <br>

                <p>Achievements are extra goals that you can accomplish while playing Tibia. This list offers you an overview of all common achievements that can be reached in Tibia. However, there are also a number of secret achievements which you have to discover yourself. Show off your five most impressive achievements on your character page.</p>

                <p>Compare yourself with other characters of your game world in the "Highscores". Achievements yield a certain number of points depending on their grade of difficulty:</p>

                <ul>
                    <li><strong>Grade 1:</strong> 1-3 points</li>
                    <li><strong>Grade 2:</strong> 4-6 points</li>
                    <li><strong>Grade 3:</strong> 7-9 points</li>
                    <li><strong>Grade 4:</strong> 10 points</li>
                </ul>

                <br>

                <div id="grade-1" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Grade 1 Achievements
                            <img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle">

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Afraid of no Ghost!</th>
                                </tr>
                                <tr>
                                    <td>You passed their test and helped the Spirithunters testing equipment, researching the supernatural and catching ghosts - it's you they're gonna call.</td>
                                </tr>
                            </table>
                        </div>

                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Allow Cookies?</th>
                                </tr>
                                <tr>
                                    <td>With a perfectly harmless smile you fooled all of those wisecrackers into eating your exploding cookies. Consider a boy or girl scout outfit next time to make the trick even better.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <div id="grade-2" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Grade 2 Achievements
                            <img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle">

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Alumni</th>
                                </tr>
                                <tr>
                                    <td>You're considered a first-rate graduate of the Magic Academy in Edron due to your pioneering discoveries and successful studies in the field of experimental magic and spell development. Ever considered teaching the Armageddon spell?</td>
                                </tr>
                            </table>
                        </div>

                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Annihilator</th>
                                </tr>
                                <tr>
                                    <td>You've daringly jumped into the infamous Annihilator and survived - taking home fame, glory and your reward.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <div id="grade-3" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Grade 3 Achievements 
                            <img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle">

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Prison Break</th>
                                </tr>
                                <tr>
                                    <td>Gaz'haragoth... a day to remember! Your world accomplished something really big - and you have been part of it!</td>
                                </tr>
                            </table>
                        </div>

                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header">Umbral Master</th>
                                </tr>
                                <tr>
                                    <td>You managed to transform, improve and sacrifice all kinds of weapons into a master state and have proven yourself worthy in a nightmarish world. Respect!</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <div id="grade-4" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Grade 4 Achievements 
                            <img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle"><img src="{{ asset('/pandaac/theme-tibia/img/achievement-grade-symbol.gif') }}" alt="Achievement" class="valign-middle">

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped inverse dark" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td>There are currently no achievements of this grade available.<br>We will add exciting new achievements in future updates, so stay tuned!</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <div id="secret" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Secret Achievements

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped inverse dark" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td>In addition to the common achievements, there are <strong>161</strong> achievements that you need to discover for yourself. There is no information about these achievements on our website. Keep your eyes and ears open! Maybe you can catch a hint in the game or on the forum.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
