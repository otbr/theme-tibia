<p>Dear {{ server()->name() }} player,</p>

<p>The email address of your {{ server()->name() }} account has been changed to this one.</p>

<p>The new password for your account is:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $password }}</p>

<p>Please remember the password or store it at a safe place but<br>
do not save it on your computer. Delete this mail once you have<br>
logged into your account successfully!</p>

<p>If you do not log into your {{ server()->name() }} account within 24 hours after the<br>
email address has been changed, all changes to the email address and<br>
the password will be cancelled. Then you can log in again with your<br>
old password.</p>
