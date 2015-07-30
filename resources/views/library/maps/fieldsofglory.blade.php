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
                <h3>The Fields of Glory</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="The Fields of Glory">
            </div>

            <p>
                The plains to north of Carlin were the scene of a huge battle between humans and orcs some centuries ago. The united forces of Carlin and Thais succeeded in repulsing their enemies, thus saving Carlin and whole {{ server()->name() }} from the wild hordes. Since this great victory, this area has been called the "Fields of Glory". A statue reminds passing travellers of the killed heroes. Nowadays, these plains are a lonely area. Only at the coast in the north there is the sleepy village of Northport, where some fishermen live. More interesting are the holes that lead to caves and dungeons below.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
