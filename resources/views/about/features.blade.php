@extends('theme::app')

@title('Game Features')
@navigation('/about/features')
@bodyclass('about-features')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Game Features</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h3>What is {{ server()->name() }}?</h3>

            <p>{{ server()->name() }} is a free fantasy massively multiplayer online role-playing game (MMORPG). Take the role of a valorous adventurer and explore a mysterious world filled with magic and bravery! Meet up with people from all over the world to live through a whole new game experience!</p>

            <br>

            <h3>Why Play {{ server()->name() }}?</h3>

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td>
                        <ul class="bullet">
                            <li>
                                <strong>It's Free!</strong><br>
                                No hidden costs, no limited trial phase! Just create an account and play {{ server()->name() }} for as long as you like!
                            </li>
                            <li>
                                <strong>Fast and Easy Access!</strong><br>
                                Even with a slow internet connection downloading the client is a matter of minutes!
                            </li>
                            <li>
                                <strong>Four Character Vocations</strong><br>
                                Be a valorous knight, a nimble paladin, a mysterious druid or a mighty sorcerer!
                            </li>
                            <li>
                                <strong>Customisable Outfit</strong><br>
                                Select from various outfits and give your character the looks of your choice!
                            </li>
                            <li>
                                <strong>Character Skills</strong><br>
                                Beef up your hero! Characters have a variety of skills that will raise through training.
                            </li>
                            <li>
                                <strong>Dozens of Spells</strong><br>
                                Fancy some magic? You can fry your enemies with a wide range of deadly spells!
                            </li>
                            <li>
                                <strong>Unlimited Character Development</strong><br>
                                Characters can be improved on and on. There's just no limit!
                            </li>
                            <li>
                                <strong>Massive Game World</strong><br>
                                Visit bustling cities, mysterious forests and dreary dungeons. The world of {{ server()->name() }} is huge, and it keeps on growing!
                            </li>
                            <li>
                                <strong>Scores of Monsters</strong><br>
                                Countless fearsome creatures roam the land. Meet vicious orcs, mighty dragons or deadly demons!
                            </li>
                            <li>
                                <strong>Hundreds of Items</strong><br>
                                Find hundreds of items. All items are unique and come with their own characteristics and graphics!
                            </li>
                            <li>
                                <strong>Quests</strong><br>
                                Go on dangerous quests for fame and fortune. All players have equal chances to do quests!
                            </li>
                            <li>
                                <strong>Monster Raids and Other Events</strong><br>
                                Special game events can happen anytime. There is nothing like a surprise attack on a city to make an adventurer's life exciting!
                            </li>
                            <li>
                                <strong>Guilds</strong><br>
                                Players can team up in guilds. Join your friends in a powerful {{ server()->name() }} guild!
                            </li>
                            <li>
                                <strong>Several Game Modes Available</strong><br>
                                Would you like to see more or less player killing? Choose a different game world to play the {{ server()->name() }} you like!
                            </li>
                            <li>
                                <strong>{{ server()->name() }} Rules</strong><br>
                                A balanced set of rules ensures that {{ server()->name() }} does not sink into anarchy while giving great freedom to players.
                            </li>
                            <li>
                                <strong>Tutor System</strong><br>
                                Our innovative tutor system will make sure there is always an experienced player to answer if you have a question!
                            </li>
                            <li>
                                <strong>Automatic Control of Player Killing</strong><br>
                                A sophisticated automatic system makes sure player killing never gets out of hand!
                            </li>
                            <li>
                                <strong>Massive Community</strong><br>
                                With more than 500,000 players, {{ server()->name() }} is one of the largest games of its kind. Meet people from all over the world!
                            </li>
                            <li>
                                <strong>Forum</strong><br>
                                The {{ server()->name() }} community never sleeps. Exchange opinions with fellow {{ server()->name() }} on our forum!
                            </li>
                            <li>
                                <strong>VIP List</strong><br>
                                A sophisticated contact list ensures that you will always know when your friends and enemies are online!
                            </li>
                            <li>
                                <strong>Groundbreaking Chat Feature</strong><br>
                                Talk to many players at the same time using {{ server()->name() }}'s easy-to-use chat feature. Chatting has never been so much fun!
                            </li>
                            <li>
                                <strong>Low System Requirements</strong><br>
                                Don't worry if your system is a bit advanced in years. {{ server()->name() }} does not require cutting-edge hardware to run!
                            </li>
                            <li>
                                <strong>Intuitive and Customisable User Interface</strong><br>
                                With context menus and tool tips assisting your every move, {{ server()->name() }} controls are intuitive and easy to learn.
                            </li>
                            <li>
                                <strong>Premium Features Available</strong><br>
                                Would you like to take {{ server()->name() }} even further? You can order Premium Time to get cool additional features such as rentable houses, brand new spells and areas, and many more!
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

            @if (! Auth::check())
                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <a href="{{ url('/account/create') }}" class="blue-button">
                                <span>Create Account</span>
                            </a>
                        </td>
                    </tr>
                </table>
            @endif

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
