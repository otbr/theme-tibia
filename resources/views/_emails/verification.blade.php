<p>
    Welcome to {{ server()->name() }}!
</p>
<p>
    Thank you for registering for {{ server()->name() }}.<br>
    Account Name: {{ $account->name() }}
</p>
<p>
    To be able to fully experience all features of a {{ server()->name() }} free account,<br>
    you need to confirm your account. To do so, please click on the<br>
    following link:<br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ url('/account/confirm', [base64_encode($account->email()), $account->properties->emailCode()]) }}">{{ url('/account/confirm', [base64_encode($account->email()), $account->properties->emailCode()]) }}</a>
</p>
<p>
    If clicking on the link does not work in your email program, please<br>
    copy and paste it into your browser. The link is possibly split up<br>
    due to a word-wrap.<br>
    Please make sure to copy the complete link.
</p>
<p>
    See you in {{ server()->name() }}!
</p>
