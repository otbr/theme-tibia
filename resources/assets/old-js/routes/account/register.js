(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].getAttribute('data-view') == 'account.register') {

        var Vue = require('vue');

        new Vue({
            el: 'body',

            components: {
                'progressbar'   : require('../../components/progressbar')
            }
        });

    }
})(window, document);
