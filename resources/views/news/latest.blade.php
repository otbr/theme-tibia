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
                    <p>
                        <span class="first-letter">W</span>e would like to give you the opportunity to explore <a href="https://pandaac.io" target="_blank">pandaac</a> and all of its features before using it as your very own automatic account creator. Your server deserves the absolute best, and we hope we can help you reach that level &ndash; but ultimately, the choice lands in your hands.
                    </p>
                    <p>
                        <a href="https://pandaac.io" target="_blank">pandaac</a> is still in an early development stage and thus may be missing a lot of the functionality that you would expect. We are however progressing steadily and aim for perfection rather than a quick development process. In the end, this will benefit all of us.
                    </p>
                    <p>
                        If you have a feature you think we should implement, or if you found a bug, please report it using the <a href="https://github.com/pandaac/pandaac/issues" target="_blank">issue tracker</a> over at GitHub.
                    </p>
                    <p>
                        For any other enquiries, please send a private message to <a href="https://otland.net/members/chris.13882/" target="_blank">@Chris</a> through OtLand.
                    </p>
                    <p>
                        To a bright future together!
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
