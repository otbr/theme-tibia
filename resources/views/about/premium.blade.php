@extends('theme::app')

@title('Premium Features')
@navigation('/about/premium')
@bodyclass('about-premium')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Premium Features</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h3>Why Should You Make Your Account Premium?</h3>

            <p>{{ server()->name() }} is free, and players are welcome to play free of charge for as long as they like. However, if you enjoy {{ server()->name() }}, you may consider to take the game further by buying Premium Scrolls, which can be used to set your account to premium status. As a premium player you will have additional abilities and advantages inside and outside the game. Buy Premium Time or a Premium Scroll today to make {{ server()->name() }} even more fun!</p>

            <p>The following benefits are available to premium players:</p>

            <table class="full-width">
                <tr>
                    <td>
                        <ul class="bullet">
                            <li>
                                <strong>Access to Premium Areas</strong><br>
                                As a premium player you can travel to new, exciting places you have never seen before. Visit the mysterious magical academy in Edron, explore the weather-beaten shores of Quirefang and wander through the not quite deserted streets of the fallen city of Yalahar! Brave the unforgiving cold on the Ice Islands or head south to the pirate-infested waters of the legendary Shattered Isles! Join the desperate fight against the forces that are corrupting the once-mighty lizard empire of Zao or unravel the secrets of the past in the sands of the Ankrahmun! There are whole new continents are out there waiting for you to explore them! Even Rookgaard boasts its own exclusive premium area! Visit new cities! Do new quests! Battle new monsters! You will find that, as a premium player, there is simply much more to see and more to do!
                            </li>
                            <li>
                                <strong>Transportation</strong><br>
                                All premium player can use the {{ server()->name() }} transport system. There are ships and magic carpets available for a comfortable journey. For a small fee our captains will bring you to all cities and even to some remote islands. Premium Time will surely save you some long and tiresome marches!
                            </li>
                            <li>
                                <strong>Improved Login</strong><br>
                                When a game world is getting close to its maximum capacity, only premium players are still admitted to this game world, while characters on free accounts must wait. Of course once the maximum capacity of a game world has been reached, no further characters can log in.
                            </li>
                            <li>
                                <strong>Cool New Spells</strong><br>
                                The mighty wizards from the magic guild of Edron have developed new spells. Cast haste on your character and run away from your enemies! Fry your opponents with the mighty Hell's Core! From useful everyday spells to powerful offensive magic, premium players simply have more spells to cast!
                            </li>
                            <li>
                                <strong>Character Promotions</strong><br>
                                Premium characters of level 20 or higher can be promoted to a veteran rank which results in several important advantages over regular characters. To name but a few, promoted characters regenerate mana, soul points and hit points faster than regular players, and they lose fewer experience points and skills upon death. Bring out the best in your characters and promote them today!
                            </li>
                            <li>
                                <strong>Loyalty System</strong><br>
                                Premium players benefit from our loyalty system. Characters on accounts who had premium status for a longer time do not only receive great titles and might appear in the loyalty highscores of their game world, but they also benefit from enhanced skills.
                            </li>
                            <li>
                                <strong>Improved Stamina</strong><br>
                                Only premium players have improved stamina which will temporarily gain them 50% more of the regular experience points for killing monsters. So premium players can raise in levels even quicker!
                            </li>
                            <li>
                                <strong>Offline Training</strong><br>
                                As you progress, training your favourite character's skills can become hard work ... but not if you are a premium player! If your account is premium, you can train your characters' skills even while you are offline! Why toil on the battlefield for hours on end to raise your character's skills when they can train them in their sleep!
                            </li>
                            <li>
                                <strong>Renting Houses</strong><br>
                                Premium players are allowed to rent houses or flats in which your characters can recover from the hardships of an adventurer's life. Furnish your new home with all kinds of furniture and impress your fellow {{ server()->name() }} with your stately home! Invite your friends and have parties! You will find that having a home of your own is a rewarding experience you will never want to miss once you have had it!
                            </li>
                            <li>
                                <strong>Placing Market Offers</strong><br>
                                Want to sell your loot fast and effectively? Offer it in the market. Only premium players are able to place buy and sell offers there.
                            </li>
                            <li>
                                <strong>Guild Leadership</strong><br>
                                Why serve in heaven when you can rule in hell? As a premium player you can found a guild of your own. Choose your own cool name and logo, recruit followers and rent a nice guildhall! As a premium player you will be able to build up the guild of your dreams. Make a name for yourself as the leader of a powerful {{ server()->name() }} guild!
                            </li>
                            <li>
                                <strong>Transfer Premium Scrolls</strong><br>
                                Only premium players are allowed to transfer Premium Scrolls into the game to gift them to a friend, sell them via the market or the safe-trade mode. Selling them will get you tons of {{ server()->name() }} gold quickly and effortlessly without having to hunt for numerous hours.
                            </li>
                            <li>
                                <strong>Access to a Premium-Only Game World</strong><br>
                                Looking for a smaller community? The world of Premia might be just what you are looking for! A world that is exclusively reserved to premium players, Premia has fewer inhabitants than other worlds. If you are looking for less crowded dungeons, you should come over to Premia today!
                            </li>
                            <li>
                                <strong>Improved Chat Options</strong><br>
                                Premium players are allowed to open up private chat channels to which they can invite their friends. Also, if you are a premium player, your VIP list will be greatly enlarged in size. With up to 100 players on your list you will always know when your friends and foes are online!
                            </li>
                            <li>
                                <strong>Larger Depots</strong><br>
                                As a premium player you can store even more items in your depots. The extended limit is 2000 items per depot.
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

            <p>Please note this is not an exhaustive list. Other benefits are sure to follow, but it is also possible that existing ones are changed or even removed in future. Best of all, {{ server()->name() }} Premium Time is inexpensive! You can upgrade your account to premium starting from as little as EUR 5.83 for a month:</p>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {{ server()->name() }} Premium Time (can only be used for your own account)
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped">
                            <tr>
                                <th>Duration</th>
                                <th>Price <span>(including all taxes)</span></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1 month (30 days)</td>
                                <td>EUR 8.45</td>
                                <td>(EUR 8.45 per month)</td>
                            </tr>
                            <tr>
                                <td>3 months (90 days)</td>
                                <td>EUR 22.35</td>
                                <td>(EUR 7.45 per month)</td>
                            </tr>
                            <tr>
                                <td>6 months (180 days)</td>
                                <td>EUR 39.95</td>
                                <td>(EUR 6.66 per month)</td>
                            </tr>
                            <tr>
                                <td>12 months (360 days)</td>
                                <td>EUR 69.95</td>
                                <td>(EUR 5.83 per month)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {{ server()->name() }} Premium Scrolls (can either be used for your own account or transferred into the game)
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped">
                            <tr>
                                <th>Duration</th>
                                <th>Price <span>(including all taxes)</span></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1 scroll (30 days)</td>
                                <td>EUR 8.95</td>
                                <td>(EUR 8.95 per month)</td>
                            </tr>
                            <tr>
                                <td>3 scrolls (90 days)</td>
                                <td>EUR 24.95</td>
                                <td>(EUR 8.32 per month)</td>
                            </tr>
                            <tr>
                                <td>7 scrolls (210 days)</td>
                                <td>EUR 53.70</td>
                                <td>(EUR 7.67 per month)</td>
                            </tr>
                            <tr>
                                <td>11 scrolls (330 days)</td>
                                <td>EUR 80.55</td>
                                <td>(EUR 7.32 per month)</td>
                            </tr>
                            <tr>
                                <td>15 scrolls (450 days)</td>
                                <td>EUR 107.40</td>
                                <td>(EUR 7.16 per month)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <p>And that is not all! As Premium Scrolls are also available as ingame items that can be traded for other {{ server()->name() }} items, you can get Premium Time for your account even if you find yourself unable to pay for Premium Time right now. There really is no excuse not to make your account premium - buy Premium Time or get a Premium Scroll and enjoy the full {{ server()->name() }} experience today!</p>

            <table class="full-width">
                <tr>
                    <td class="text-center">
                        <a href="#" class="green-button">
                            <span>Get Premium</span>
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
