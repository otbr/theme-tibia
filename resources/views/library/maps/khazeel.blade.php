@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Kha'zeel</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Kha'zeel">
            </div>

            <p>
                The mountain range known as Kha'zeel is the home of the mysterious djinn. From their heavily guarded bastion the honest marids have battled their malicious efreet cousins for aeons. Their constant wars left little place for other life forms, so over the centuries the mountains have become a lifeless monument of that eternal hate. Only rarely, brave wanderers seek their passage through those mountains to travel between the great desert and the jungle of Tiquanda. Some of them claim to have discovered trails of ancient secrets, long forgotten and unknown even to the mighty djinn. Others tell tales about their battles with fearsome monsters whose lairs they have stumbled upon. Nobody knows how many of those stories are simply made up, exaggerated, an illusion sent by the djinn, or perhaps even true.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
