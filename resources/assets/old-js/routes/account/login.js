(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].getAttribute('data-view') == 'account.auth.login') {

        var Vue = require('vue');

        new Vue({
            el: 'body',

            ready: function () {
                document.querySelector('input[name="name"]').focus();
            }
        });

    }
})(window, document);
