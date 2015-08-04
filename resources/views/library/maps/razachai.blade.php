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
                <h3>Razachai</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Razachai">
            </div>

            <p>
                The imperial city of Razachai stands firm in the struggle against the all-consuming corruption of the bordering lands. A testament to the will of the dragon emperor the city, though scared by the corruption, withstood the impending doom at least until now.
                <br>
                Once a centre of learning and culture, the city has turned into a besieged fortress. Heavily armed patrols roam its streets and uphold the slipping order, trying to exterminate the taint of the corruption. Even in the direst days of the empire the sturdy walls of Razachai were never breached.
                <br>
                The centre of the lizard empire has seen many changes of custom and environment in the course of its existence, but none of them has challenged its existence as much as the impending doom of the corruption. The looming thread has made the protectors of Razachai extremely edgy and aggressive. Unwelcome visitors should expect a lethal welcome. Yet, the treasures of the ancient empire and the secrets of the dragon kings might be worth the risk.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
