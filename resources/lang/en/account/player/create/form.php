<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/player/create/form.blade.php
|--------------------------------------------------------------------------
*/

return [

    'title'         => 'Account Management',
    'preamble'      => '<p>Please choose a name and sex for your character as well as the game world on which you want 
                        the character to live. If you cannot think of any fantasy names, click on the link below the 
                        name field to get some suggestions for a name.</p><p>In any case the name must not violate the 
                        naming conventions stated in the <a href=":rules">:server Rules</a>, or your character might 
                        get deleted or name locked.</p>',
    'heading'       => 'Create Character',
    'name'          => 'Name',
    'sex'           => 'Sex',
    'suggestname'   => 'suggest name',
    'vocation'      => 'Vocation:',
    'world'         => 'World:',
    'suggestworld'  => 'suggest game world',
    'submit'        => 'Submit',
    'back'          => 'Back',

];
