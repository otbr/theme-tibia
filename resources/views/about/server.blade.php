@extends('theme::app')

@section('title', 'What Is '.server()->name().'?')
@section('body', 'about-server')
@section('navigation', '/about/server')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-whatistibia.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td>
                        <img src="{{ asset('/pandaac/theme-tibia/img/what_is_tibia_intro.jpg') }}" alt="What is {{ server()->name() }}?">
                    </td>
                    <td valign="middle" class="padding">
                        <p>{{ server()->name() }} is one of the oldest and most successful massively multiplayer online role-playing games (MMORPG) created in Europe. In an MMORPG people from all over the world meet on a virtual playground to explore areas, solve tricky riddles and undertake heroic exploits.</p>

                        <p>For more than 10 years now, players have been visiting the medieval world of {{ server()->name() }}. At present, more than 500,000 players from all over the world inhabit the {{ server()->name() }} continent enjoying the numerous <a href="{{ url('/about/features') }}">game features</a>.</p>
                    </td>
                </tr>
            </table>

            <p>Acting as knights, paladins, sorcerers or druids, players are faced with the challenge of developing the skills of their selected characters, exploring a large variety of areas and dangerous dungeons and interacting with other players on a social and diplomatic level. Besides the sophisticated chat tools it is especially the unique freedom players enjoy in {{ server()->name() }} that create an enormously immersive gaming experience.</p>

            <p class="text-center"><img src="{{ asset('/pandaac/theme-tibia/img/what_is_tibia_vocations.jpg') }}" alt="What is {{ server()->name() }}?"></p>

            <p>{{ server()->name() }} can be played free of charge as a matter of principle. However, your account can be upgraded anytime to a <a href="{{ url('/about/premium') }}">premium account</a>. Advantages of premium accounts include the access to special game areas and items as well as further special features relating to the game.</p>

            <p>A great helper team consisting of <a href="{{ url('/support/tutor') }}">tutors</a> answers questions from unexperienced players in the help channel.</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
