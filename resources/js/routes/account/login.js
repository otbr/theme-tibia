(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-login') !== -1) {

        var Vue = require('vue');

        new Vue({
            el: 'body.account-login',

            ready: function () {
                document.querySelector('input[name="name"]').focus();
            }
        });

    }
})(window, document);
