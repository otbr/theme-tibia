@extends('theme::app')

@title('Spells')
@navigation('/library/spells')
@bodyclass('library-spells')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Spells</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>Here you can see the list of all available spells in Tibia. Click on any spell name to get detailed information. Please adjust the search criteria below if you want to see just certain spells. Also, you can sort the spell list by any column of your choice.</p>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Spells
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th class="header" width="45%">Name</th>
                                <th class="header">Group</th>
                                <th class="header">Type</th>
                                <th class="header">Exp Lvl</th>
                                <th class="header">Mana</th>
                                <th class="header">Price</th>
                                <th class="header">Premium</th>
                            </tr>
                            <tr>
                                <td><a href="#">Animate Dead Rune</a> (adana mort)</td>
                                <td>Support</td>
                                <td>Rune</td>
                                <td>27</td>
                                <td>600</td>
                                <td>1200</td>
                                <td>yes</td>
                            </tr>
                            <tr>
                                <td><a href="#">Annihilation</a> (exori gran ico)</td>
                                <td>Attack</td>
                                <td>Instant</td>
                                <td>110</td>
                                <td>300</td>
                                <td>20000</td>
                                <td>yes</td>
                            </tr>
                            <tr>
                                <td><a href="#">Apprentice's Strike</a> (exori min flam)</td>
                                <td>Attack</td>
                                <td>Instant</td>
                                <td>8</td>
                                <td>6</td>
                                <td>free</td>
                                <td>no</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Spell Search
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped inverse dark" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th class="header" width="25%">Vocation</th>
                                <th class="header" width="25%">Group</th>
                                <th class="header" width="25%">Type</th>
                                <th class="header" width="25%">Premium</th>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <label><input type="radio" name="vocation" value="all" checked> all</label><br>
                                    <label><input type="radio" name="vocation" value="1"> Druid</label><br>
                                    <label><input type="radio" name="vocation" value="3"> Knight</label><br>
                                    <label><input type="radio" name="vocation" value="2"> Paladin</label><br>
                                    <label><input type="radio" name="vocation" value="0"> Sorcerer</label>
                                </td>
                                <td valign="top">
                                    <label><input type="radio" name="group" value="all" checked> all</label><br>
                                    <label><input type="radio" name="group" value="attack"> Attack</label><br>
                                    <label><input type="radio" name="group" value="healing"> Healing</label><br>
                                    <label><input type="radio" name="group" value="support"> Support</label>
                                </td>
                                <td valign="top">
                                    <label><input type="radio" name="type" value="all" checked> all</label><br>
                                    <label><input type="radio" name="type" value="instant"> Instant</label><br>
                                    <label><input type="radio" name="type" value="rune"> Rune</label>
                                </td>
                                <td valign="top">
                                    <label><input type="radio" name="premium" value="all" checked> all</label><br>
                                    <label><input type="radio" name="premium" value="no"> no</label><br>
                                    <label><input type="radio" name="premium" value="yes"> yes</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    Sort by: 
                                    <select name="sort">
                                        <option value="name">Name</option>
                                        <option value="group">Group</option>
                                        <option value="type">Type</option>
                                        <option value="explvl">Exp Lvl</option>
                                        <option value="mana">Mana</option>
                                        <option value="price">Price</option>
                                        <option value="premium">Premium</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td align="center">
                        <a href="#" class="blue-button">
                            <span>Submit</span>
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
