@extends('theme::app')

@title('News')
@navigation('/')
@bodyclass('news-latest')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-newsticker.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            Lorem ipsum.
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-featuredarticle.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            Lorem ipsum.
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box news">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-news.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <article class="article">
                <header class="header">
                    <span class="icon cogwheel"></span>
                    <time datetime="2015-07-30 12:00:00">July 30 2015</time>

                    <h2>This is a demo-site of pandaac</h2>
                </header>

                <div class="body">
                    <p class="first-letter">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacus lacus, scelerisque vitae nisi sed, gravida porttitor sem. Aenean diam arcu, egestas ut elit in, consectetur vulputate diam. Vestibulum luctus vestibulum elementum. Fusce eu efficitur ligula.
                    </p>
                    <p>
                        Nam diam libero, convallis ac faucibus vel, placerat id ipsum. Ut semper, urna vitae vestibulum tristique, tellus purus tincidunt erat, in consectetur enim augue a odio. Etiam vel elementum ipsum. Sed nisl ipsum, ultrices at tristique in, tincidunt rutrum purus. Praesent facilisis ipsum ex, sit amet porttitor nunc molestie et. Vivamus non metus tempor, vehicula lacus eget, venenatis risus. Duis commodo non mi nec porttitor.
                    </p>
                    <p>
                        Cras sit amet euismod ligula. Maecenas rhoncus sapien et quam cursus, vel efficitur ex vehicula. Sed ac sem quis sapien laoreet aliquet. Integer molestie iaculis porttitor. Phasellus rutrum tempor metus hendrerit malesuada. Donec ut mauris laoreet, sollicitudin orci eget, vulputate orci.
                    </p>
                    <p>
                        Thank you,<br>
                        Chris.
                    </p>
                    <p class="text-right">
                        <a href="#">&raquo; Comment on this news</a>
                    </p>
                </div>
            </article>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
