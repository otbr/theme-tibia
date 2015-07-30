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
                <h3>Green Claw Swamp</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Green Claw Swamp">
            </div>

            <p>
                In west-central {{ server()->name() }} extend large lowlands with loamy ground that are run through by many watercourses: the Green Claw Swamp. The vegetation thrives luxuriantly on the fertile soil, and so a machete is an indispensable tool to force one's way. In many places the stationary water has turned into poisonous and impassable swamp. The area has produced some terrible creatures and plants that are as poisonous as the water they consume. But the inaccessible region has also attracted a lot of outlaws and other societies that fear the arm of the law.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
