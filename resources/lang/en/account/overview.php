<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/overview.blade.php
|--------------------------------------------------------------------------
*/

return [

    'title'                 => 'Account Management',
    'welcome'               => 'Welcome to your account!',
    'welcomename'           => 'Welcome to your account, :name!',
    'heading'               => 'Account Status',
    'manageaccount'         => 'Manage Account',
    'getpremium'            => 'Get Premium',
    'logout'                => 'Logout',
    'free'                  => 'Free Account',
    'freedesc'              => 'To benefit from our great premium features, get Premium Time for your account.',

    'registration.edit'     => 'Edit',
    'registration.heading'  => 'A request has been submitted to change your registration.',
    'registration.content'  => 'You must wait until <strong>:date</strong> in order to confirm the new registration 
                                data. Please cancel the request if you do not want your registration to be changed!',

    'email.edit'            => 'Edit',
    'email.heading'         => 'There is an email change request for the account!',
    'email.content'         => 'A request has been submitted to change the email address of this account to 
                                <strong>:email</strong>. After a waiting period of <strong>:days days</strong> you 
                                can accept the new email address and finish the process. Please cancel the request 
                                if you do not want your email address to be changed! Also cancel the request if you 
                                have no access to the new email address!',

    'confirm.heading'       => 'Your account is not confirmed!',
    'confirm.content'       => 'Please check your emails to confirm your account.',
    'confirm.alert'         => '<h3>Confirm Account</h3>
                                <p>An email has been sent to the address you have entered while you have created 
                                your account. Please check your emails to confirm your account.</p>

                                <p>In case you have lost your confirmation email or did not receive it, you can 
                                request the email containing the confirmation link for your account again.</p>

                                <p>If you no longer have access to the email address the confirmation link was sent 
                                to, you can change the email address and the email will be sent again automatically.</p>',
    'confirm.request'       => 'Re-request Email',
    'confirm.edit'          => 'Change Email',

    'vouchers.vouchers'     => 'Vouchers',
    'vouchers.heading'      => 'Vouchers Available!',
    'vouchers.content'      => 'A voucher is available for your account! Click on the button for further information.',

    'unregistered.heading'  => 'Your account is not registered!',
    'unregistered.register' => 'Register Account',
    'unregistered.content'  => 'You can register your account for increased protection. Click on "Register Account" and 
                                get your free recovery key today!',
    
    'players.heading'       => 'Characters',
    'players.name'          => 'Name',
    'players.world'         => 'World',
    'players.status'        => 'Status',
    'players.level'         => '- Level :level',
    'players.hiddendeleted' => 'hidden, deleted',
    'players.hidden'        => 'hidden',
    'players.deleted'       => 'deleted',
    'players.edit'          => 'Edit',
    'players.delete'        => 'Delete',
    'players.undelete'      => 'Undelete',
    'players.empty'         => 'No characters yet.',
    'players.create'        => 'Create Character',

];
