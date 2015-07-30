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
                <h3>Ankrahmun</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Ankrahmun">
            </div>

            <p>
                The somber city of Ankrahmun is unlike any other place in {{ server()->name() }}. Its inhabitants do not dwell in common houses but rather in age-worn pyramids, and even though Ankrahmun is far from lifeless, it is essentially a city of death. Its inhabitants are worshippers of an obscure cult that celebrates undeath as the key to immortality, and the pharaoh himself, who is both the high priest and the primary deity of his cult, has long since entered the gruesome state of life in death. His oppressive presence is almost physically tangible all over the city, and the eerie silence emanating from his palace fills the heart of the amazed visitor with apprehension.
                <br>
                Today, the majority of Ankrahmun's citizens are still living people, but being true believers of their creed they strive to follow their spiritual leader into the twilight state of undeath. To further encourage his followers' zeal the pharaoh has filled the lower levels of his own palace with skeletons and other walking dead so that those who still cling to their mortal forms may see the glory of undeath for themselves.
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
