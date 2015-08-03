@extends('theme::app')

@title(trans('theme::news.latest.title'))
@navigation('/')
@bodyclass('news-latest')

@section('content')
<div class="box ticker">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::news.latest.newsticker.heading') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            <table class="table-striped">

                <tr data-v-on="click: toggle('ticker-1')">
                    <td class="valign top icon-wrapper">
                        <span class="icon technical"></span>
                    </td>
                    <td class="valign top time-wrapper">
                        <time datetime="2015-07-29 12:00:00">Jul 29 2015</time>
                    </td>
                    <td class="valign top content-wrapper">
                        <span data-v-show="isToggled('ticker-1')">With today's server save, unusable sudden death runes that were looted erroneously from several monsters after the update release have been removed from the game.</span>
                        <span data-v-show="! isToggled('ticker-1')">With today's server save, unusable sudden death runes that ...</span>
                    </td>
                    <td class="valign top">
                        <button class="plusminus active" data-v-class="active: isToggled('ticker-1')"></button>
                    </td>
                </tr>

                <tr data-v-on="click: toggle('ticker-2')">
                    <td class="valign top icon-wrapper">
                        <span class="icon community"></span>
                    </td>
                    <td class="valign top time-wrapper">
                        <time datetime="2015-07-28 12:00:00">Jul 28 2015</time>
                    </td>
                    <td class="valign top content-wrapper">
                        <span data-v-show="isToggled('ticker-2')">Due to lack of entries, the event board will be deleted on August 5. While you can still view this board until that date, you can no longer post there. Please use your world board or the gameplay board to advertise your ingame events from now on.</span>
                        <span data-v-show="! isToggled('ticker-2')">Due to lack of entries, the event board will be deleted on ...</span>
                    </td>
                    <td class="valign top">
                        <button class="plusminus active" data-v-class="active: isToggled('ticker-2')"></button>
                    </td>
                </tr>

                <tr data-v-on="click: toggle('ticker-3')">
                    <td class="valign top icon-wrapper">
                        <span class="icon support"></span>
                    </td>
                    <td class="valign top time-wrapper">
                        <time datetime="2015-07-28 12:00:00">Jul 28 2015</time>
                    </td>
                    <td class="valign top content-wrapper">
                        <span data-v-show="isToggled('ticker-3')">A thorough check of the compensation handed out on July 15 revealed that 0.3% of all 400,000 accounts that were compensated in any way have not yet received their full compensation. These 0.3% have received their missing compensation today.</span>
                        <span data-v-show="! isToggled('ticker-3')">A thorough check of the compensation handed out on July 15 ...</span>
                    </td>
                    <td class="valign top">
                        <button class="plusminus active" data-v-class="active: isToggled('ticker-3')"></button>
                    </td>
                </tr>

                <tr data-v-on="click: toggle('ticker-4')">
                    <td class="valign top icon-wrapper">
                        <span class="icon community"></span>
                    </td>
                    <td class="valign top time-wrapper">
                        <time datetime="2015-07-28 12:00:00">Jul 28 2015</time>
                    </td>
                    <td class="valign top content-wrapper">
                        <span data-v-show="isToggled('ticker-4')">TibiaVenezuela.com has published a new article, yet again! This time, they take you on a journey back in time. Ready for some nostalgia? Head on over there to read the article which is available in Spanish!</span>
                        <span data-v-show="! isToggled('ticker-4')">TibiaVenezuela.com has published a new article, yet again! ...</span>
                    </td>
                    <td class="valign top">
                        <button class="plusminus active" data-v-class="active: isToggled('ticker-4')"></button>
                    </td>
                </tr>

                <tr data-v-on="click: toggle('ticker-5')">
                    <td class="valign top icon-wrapper">
                        <span class="icon technical"></span>
                    </td>
                    <td class="valign top time-wrapper">
                        <time datetime="2015-07-27 12:00:00">Jul 27 2015</time>
                    </td>
                    <td class="valign top content-wrapper">
                        <span data-v-show="isToggled('ticker-5')">The server save on some game worlds took longer than usual today due to an unexpected technical issue. We are sorry for the inconvenience this may have caused you.</span>
                        <span data-v-show="! isToggled('ticker-5')">The server save on some game worlds took longer than usual ...</span>
                    </td>
                    <td class="valign top">
                        <button class="plusminus active" data-v-class="active: isToggled('ticker-5')"></button>
                    </td>
                </tr>

            </table>
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box featured">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::news.latest.featured.heading') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            <table>
                <tr>
                    <td class="valign top">
                        <p>
                            <strong>Tibia Coins and the Store</strong>
                            This month, we would like to share some information about an important new feature which will be released in July: Tibia Coins, a special new currency. Along with it, the ingame Store will open its doors. Read on to find out more!
                        </p>
                    </td>
                    <td class="valign top text-right" rowspan="2">
                        <a href="#" class="featured-image">
                            <img src="{{ asset('/pandaac/theme-tibia/img/featuredthumb_3238.jpg') }}" alt="Featured Image">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <a href="#">{!! trans('theme::news.latest.featured.readmore') !!}</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box news">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::news.latest.news.heading') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">

            <article class="article">
                <header class="header">
                    <span class="icon community"></span>
                    <time datetime="2015-07-30 12:00:00">July 30 2015</time>

                    <h2>This is a demo-site of pandaac</h2>
                </header>

                <div class="body">
                    <p>
                        <span class="first-letter">W</span>e would like to give you the opportunity to explore <a href="https://pandaac.io" target="_blank">pandaac</a> and all of its features before using it as your very own automatic account creator. Your server deserves the absolute best, and we hope we can help you reach that level &ndash; but ultimately, the choice lands in your hands.
                    </p>
                    <p>
                        <strong>pandaac</strong> is still in an early development stage and thus may be missing a lot of the functionality that you would expect. We are however progressing steadily and aim for perfection rather than a quick development process. In the end, this will benefit all of us.
                    </p>
                    <p>
                        If you have a feature you think we should implement, or if you managed to stumble upon a bug, please report it using the <a href="https://github.com/pandaac/pandaac/issues" target="_blank">issue tracker</a> over at our GitHub repository.
                    </p>
                    <p>
                        For any other enquiries, please send a private message to <a href="https://otland.net/members/chris.13882/" target="_blank">@Chris</a> through OtLand.
                    </p>
                    <p>
                        To a bright future together!
                    </p>
                    <p class="text-right">
                        <a href="#">{!! trans('theme::news.latest.news.comment') !!}</a>
                    </p>
                </div>
            </article>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
