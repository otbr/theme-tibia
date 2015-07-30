@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Maps</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Dawnport</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Dawnport">
            </div>

            <p>
                Dawnport is a small hilly island located westsouthwest of the Ghostlands.
                <br>
                Not long ago, Dawnport was discovered by members of the Adventurers' Guild who sought to find the source of an unknown, seemingly magical call that came from somewhere out on the seas. After navigating through some very contrary winds, the adventurers found a small island that they decided to call Dawnport, after the strange dawn-like glow they had followed in the night.
                <br>
                On the island, they built an outpost and began investigating Dawnport, although they had to retreat very often as the island is packed with various monsters. Deep beneath their outpost, the adventurers also found a strange portal. To their amazement, suddenly people started to come out of it. At the same time the strange magical call began, travellers had also reported that ocean drifts had altered their course and horrible storms sweep the King's Gulf, making passages to Rookgaard nearly impossible. Alarmed, sorcerers tried to focus magical teleporters on Rookgaard, but every teleporter showed strange malfunctions and was unpredictable to use, so that less and less new heroes arrived on Rookgaard. The magic academy at Edron concluded that the Soul Vortex had somehow adapted itself to the strange givens, and now leads to the portal at Dawnport.
                <br>
                In view of all this, the adventurers decided they had to guard the crystal portal they had found against the monsters that are also drawn to the source of the strange magical call, and welcome new heroes to {{ server()->name() }}.
                <br>
                As the adventurers are small in numbers, they had to include the new heroes in their tasks, and so anyone new to {{ server()->name() }} can help them in their quest and fight off the monsters by taking up the arms of a vocation - at least until they are experienced enough to venture forth to the mainland, where the guild can always use new hands in facing new challenges, or where the now hardened adventurers can explore {{ server()->name() }} on their own.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
