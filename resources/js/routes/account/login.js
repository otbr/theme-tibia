(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-auth-login') !== -1) {

        var Vue = require('vue');

        new Vue({
            el: 'body.account-auth-login',

            ready: function () {
                document.querySelector('input[name="name"]').focus();
            }
        });

    }
})(window, document);
