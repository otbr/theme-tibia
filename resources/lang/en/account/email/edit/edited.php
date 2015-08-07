<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/email/edit/edited.blade.php
|--------------------------------------------------------------------------
*/

return [

    'title'         => 'Account Management',
    'heading'       => 'New Email Address Requested',
    'changed'       => 'Email Address Changed',
    'confirmed'     => 'You have requested to change your email address to <strong>:email</strong>. The actual change 
                        will take place after a waiting period of :days days, during which you can cancel the request 
                        at any time.',
    'unconfirmed'   => 'Your account email address was changed. Your new email address is:
                        <p class="text-center" style="margin: 15px 0;"><strong>:email</strong></p>
                        An email with the confirmation link for your account was sent to the new email address.',
    'back'          => 'Back',

];
