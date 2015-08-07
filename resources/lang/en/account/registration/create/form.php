<?php

/*
|--------------------------------------------------------------------------
| ./resources/views/account/registration/create/form.blade.php
|--------------------------------------------------------------------------
*/

return [
    
    'title'         => 'Account Management',
    'preheading'    => 'Register Account',
    'date'          => 'Registration Date',
    'verification'  => 'Verification',
    'recoverykey'   => 'Recovery Key',
    'preamble'      => '<p>Account registration offers many important advantages:</p>

                        <ul>
                            <li>Registered users get a recovery key, which can be used to recover their accounts if they 
                            have lost access to the assigned email address.</li>
                            <li>Registered users can request a new recovery key for a small fee.</li>
                            <li>Extra Services can only be bought for registered accounts.</li>
                            <li>Finally, only registered users can become tutor.</li>
                        </ul>

                        <p><strong>NOTE:</strong> The data given in the registration will be used exclusively for sending 
                        recovery letters and compiling internal statistical surveys. It will be treated in a strictly 
                        confidential manner. For details please see the <a href=":privacy">:server Privacy Policy</a>.</p>

                        <p>Please enter correct and complete data to make sure we can provide you with the best possible 
                        support. Above all, give your full address to make sure that our postal recovery letters will 
                        reach you. Note that all data entered in the registration can be re-edited later on, except for 
                        your gender and date of birth.</p>',
    'heading'       => 'Enter Registration Data',
    'firstname'     => 'First Name:',
    'surname'       => 'Last Name:',
    'country'       => 'Country:',
    'birthday'      => 'Date of Birth:',
    'gender'        => 'Gender:',
    'female'        => 'Female',
    'male'          => 'Male',
    'continue'      => 'Continue',
    'back'          => 'Back',

];
