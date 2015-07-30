@extends('theme::app')

@title('News')
@navigation('/')
@bodyclass('news-latest')

@section('content')
<div class="box ticker">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">News Ticker</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            <table class="table-striped" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td width="20"><span class="icon technical"></span></td>
                    <td width="85"><time datetime="2015-07-29 12:00:00">Jul 29 2015</time></td>
                    <td>With today's server save, unusable sudden death runes that ...</td>
                </tr>
                <tr>
                    <td width="20"><span class="icon community"></span></td>
                    <td width="85"><time datetime="2015-07-28 12:00:00">Jul 28 2015</time></td>
                    <td>Due to lack of entries, the event board will be deleted on ...</td>
                </tr>
                <tr>
                    <td width="20"><span class="icon support"></span></td>
                    <td width="85"><time datetime="2015-07-28 12:00:00">Jul 28 2015</time></td>
                    <td>A thorough check of the compensation handed out on July 15 ...</td>
                </tr>
                <tr>
                    <td width="20"><span class="icon community"></span></td>
                    <td width="85"><time datetime="2015-07-28 12:00:00">Jul 28 2015</time></td>
                    <td>TibiaVenezuela.com has published a new article, yet again! ...</td>
                </tr>
                <tr>
                    <td width="20"><span class="icon technical"></span></td>
                    <td width="85"><time datetime="2015-07-27 12:00:00">Jul 27 2015</time></td>
                    <td>The server save on some game worlds took longer than usual ...</td>
                </tr>
            </table>
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box featured">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Featured Article</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td valign="top">
                        <p>
                            <strong>Tibia Coins and the Store</strong>
                            This month, we would like to share some information about an important new feature which will be released in July: Tibia Coins, a special new currency. Along with it, the ingame Store will open its doors. Read on to find out more!
                        </p>
                    </td>
                    <td align="right" valign="top" rowspan="2">
                        <a href="#"><img src="{{ asset('/pandaac/theme-tibia/img/featuredthumb_3238.jpg') }}"></a>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <a href="#">&raquo; read more</a>
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
        <div class="headline">News</div>
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
                        <a href="#">&raquo; Comment on this news</a>
                    </p>
                </div>
            </article>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
