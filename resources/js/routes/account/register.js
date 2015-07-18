(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-register') !== -1) {

        var Vue = require('vue');

        new Vue({
            el: 'body.account-register',

            components: {
                'progressbar'   : require('../../components/progressbar')
            }
        });

    }
})(window, document);
