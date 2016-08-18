@extends('theme::app')

@section('title', 'Maps')
@section('navigation', '/library/maps')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Maps</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="text-center">
                    <h3>Venore</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Venore">
                </div>

                <p>In the swamps at the eastern coast of the continent lies the city of Venore. It is ruled by the money and the power of the local merchant houses. By monopolizing the trade with dwarfish and elfish goods as well as importing Edron wood and Darashian wasp-honey, the merchants of Venore used their fleets of trading ships to raise the wealth and influence of their town. The local shipyard and the harvest of the spice-weedgrass found in the nearby swamps made the city important to the kingdom. As a consequence, the merchant houses could claim a lot of privileges from the Thaian kings, such as the exclusive right to run gambling and betting businesses.</p>

                <p>If you are rich in Venore, you can live like a king. If you are poor, you can be lucky if anyone ever takes notice of you. Nonetheless, many fortune-hunters flock to Venore to catch a glimpse on its wealthy inhabitants, buy in the huge market halls, look for promising trade opportunities, and perhaps gamble for a fortune in the notorious Hard Rock Tavern.</p>

                <p>The vicinity of Venore has become a home to many other creatures, and several wanderers leaving for an excursion into the misty swamps have never returned. Rumours say they have lost their way and fallen victim to nature's forces - or, more likely, victim to the skull-collecting amazon tribe which is supposed to roam the wilderness. Survivors of the poisonous maze also brought home stories of a well insulated hideout of rogue elves known as Shadowthorn, a name deriving from its impermeable thorny walls, which seem to have grown naturally by themselves to form the hideout.</p>

                <p>Adventurers from all over the world, who are prepared to face the creatures lurking in the mists, are encouraged to visit Venore as a base for their expeditions into the swamp or the nearby Plains of Havoc ... and spend their money in the markets or the tavern.</p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
