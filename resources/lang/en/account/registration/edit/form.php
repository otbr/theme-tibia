<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/registration/edit/form.blade.php
|--------------------------------------------------------------------------
*/

return [
    
    'title'         => 'Account Management',
    'preamble'      => '<p>Use this interface to edit incorrect registration data, such as your postal address after 
                        moving elsewhere. Note that the gender and date of birth cannot be altered. Also, the changes 
                        will only be finalised after a waiting period of :days days has passed.</p>',
    'heading'       => 'Change Registration Data',
    'firstname'     => 'First Name:',
    'surname'       => 'Last Name:',
    'country'       => 'Country:',
    'confirmation'  => 'Please enter your password to confirm the request to change your registration data.',
    'password'      => 'Password:',
    'continue'      => 'Continue',
    'back'          => 'Back',

];
