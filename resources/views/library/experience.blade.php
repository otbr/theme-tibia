@extends('theme::app')

@section('title', 'Experience Table')
@section('body', 'library-experience')
@section('navigation', '/library/experience')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-experiencetable.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>This is a list of the experience points that are required to advance to the various levels. Remember you can also check the respective skill bar in your skill window of the client to check your progress towards the next level.</p>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Experience Table
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <?php $levels = collect(range(1, 1000))->chunk(1000 / 4); ?>
                            @foreach ($levels as $column)
                                <td>
                                    <table class="table-striped inverse" cellspacing="0" cellpadding="0" border="0">
                                        <tr>
                                            <th>Level</th>
                                            <th>Experience</th>
                                        </tr>

                                        @foreach ($column as $level)
                                            <tr>
                                                <td>{{ $level }}</td>
                                                <td>{{ experience($level) }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
