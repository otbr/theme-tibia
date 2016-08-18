@extends('theme::app')

@section('title', 'World Quests')
@section('navigation', '/library/quests')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">World Quests</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="notification">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table style="width: 100%;">
                            <tr>
                                <td align="center" valign="middle">
                                    <div class="padding">
                                        [<a href="#running">Running World Events</a>]
                                        [<a href="#upcoming">Upcoming World Events</a>]
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>

                <br>

                <p>World events and world tasks can be achieved if a large number of players of a game world works together.<br>World events are seasonal events which start for all game worlds at the same time. World tasks are pre-defined missions that can be fulfilled by players of a game world and are not bound to a specific date.</p>

                <p>Check here for upcoming and available world quests! Find out if your game world is still in the race, which game world won the latest world event or which game world has recently completed a tricky world task.</p>

                <br>

                <div id="running" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Running World Events

                            <a href="#top" class="pull-right">
                                <img src="{{ asset('/pandaac/theme-tibia/img/back-to-top.gif') }}" alt="Back to top!" class="valign-middle">
                            </a>
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <p>There are currently no world events running!</p>
                    </div>
                </div>

                <br>

                <div id="upcoming" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Upcoming World Events

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
                                    <th class="header"><a href="#">Rise of Devovorga</a></th>
                                </tr>
                                <tr>
                                    <td>
                                        A powerful ancient weapon meant to be sleeping forever has awoken deep under Vengoth. Portals all over the world lead to fragments of its shattered soul. With thirst for revenge and burning rage she will destroy the world - unless you fight her back.
                                        <div class="begins">
                                            <strong>Quest Begins:</strong> Sep 15 2015
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header"><a href="#">The Colours of Magic</a></th>
                                </tr>
                                <tr>
                                    <td>
                                        A contest between three wizards has spread across all Tibia so that mysterious letters with coloured powders can now be found everywhere. Choose your wizard and make your friends join your cause - what is your true colour?
                                        <div class="begins">
                                            <strong>Quest Begins:</strong> Sep 15 2015
                                        </div>
                                    </td>
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
