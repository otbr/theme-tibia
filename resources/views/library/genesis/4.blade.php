@extends('theme::app')

@section('title', 'Genesis')
@section('navigation', '/library/genesis')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Genesis</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <h1>The First Creatures</h1>

                <p><span class="first-letter">Z</span>athroth watched the progress of creation with wrath and disgust. If he had had his way, he would have obliterated creation then and there. However, he knew that he lacked the power to do that, especially since Fardos and Uman were now well aware of his intentions and watched him carefully. He would have to resort to other means to bring ruin to creation. It was for this reason that he watched the concept of life with great interest, because he foresaw quite clearly that a lot of mischief could be done with it. Much as he loathed most of the gods that had been created, there was one who had caught his attention. Fafnar's base instincts and her destructive powers did not fail to impress him, and so a plan came to his mind. He flattered her with compliments and before long he succeeded in seducing her. Thus Brog the Raging Titan was conceived. An exceedingly ugly abomination that had only one eye in its huge head, Brog had inherited little of his father's cunning and none of his caution, yet he was strong and fierce, and his mother's furious heat burned wildly inside him.</p>

                <p><span class="first-letter">A</span>s he grew up, Brog was pained by the fire burning inside him, until one day when it grew unbearable he summoned all his magical powers and released as much of the painful flame into the world as he could. The searing fire mixed with his rage, and from it rose Garsharak, the very first dragon, who later sired a whole race of intelligent, giant lizards, a race that would eventually bring terror and chaos into {{ server()->name() }}. Brog watched the terrible creature he had created rather accidentally, and he rejoiced when he saw just how fierce and powerful it was. Though he was rather stupid he, too, had the gift to create life, which in an act of vanity he next used to create the cyclopes in his own image.</p>

                <div class="text-center">
                    <img src="{{ asset('/pandaac/theme-tibia/img/genesis4.jpg') }}" alt="Genesis">
                </div>

                <p><span class="first-letter">Z</span>athroth watched Brog's experiments with great interest. So far he had not held his son in high esteem, but here was something for which he himself admittedly had little talent for. Since he did not understand the laws of life himself he knew that Brog's gift could prove to be a great asset. He called his son to him and told him to go on with his experiments, urging him to create something more terrifying and destructive than cyclopes. Even though these giants were ferocious and strong, they were not quite as destructive as he wanted them to be. In fact, due to their love of mining and smithing the cyclopes were a creative rather than a destructive race. Worse, they were not propagating fast enough to make them a real threat to creation. For this reason Brog went on to create trolls and goblins, races that were weaker than the cyclopes, but propagated much faster. However, his undisputed masterpiece were the orcs, a race of fearsome, single-minded warriors who lived only to expand and conquer. Soon they had spread all over {{ server()->name() }}, and they were the scourge of all that was alive.</p>

                <p class="text-center">
                    <big>Chapter III: <a href="{{ url('/library/genesis/3') }}">The Birth of the Elements</a></big>
                    <span class="spacer"></span>
                    <big>Chapter V: <a href="{{ url('/library/genesis/5') }}">The Age of Chaos</a></big>
                </p>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
