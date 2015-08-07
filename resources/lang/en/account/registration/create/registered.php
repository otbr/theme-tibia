<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/registration/create/registered.blade.php
|--------------------------------------------------------------------------
*/

return [
   
    'title'         => 'Account Management',
    'preheading'    => 'Register Account',
    'date'          => 'Registration Date',
    'verification'  => 'Verification',
    'recoverykey'   => 'Recovery Key',
    'heading'       => 'Account Registered',
    'content'       => '<p>Thank you for registering your account! You can now recover your account if you have lost 
                        access to the assigned email address by using the following</p>

                        <h1 class="text-center">Recovery Key: :key</h1>

                        <p><strong>Important:</strong></p>
                        <ul>
                            <li>Write down this recovery key carefully.</li>
                            <li>Store it at a safe place! Do not save it on your computer!</li>
                            <li>You will not receive an email containing this recovery key.</li>
                            <li>If you lose your recovery key, you can request a new one for a small fee at the Lost 
                            Account Interface.</li>
                        </ul>',
    'back'          => 'Back',

];
