(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-index') !== -1) {
    
        var Vue = require('vue');

        new Vue({
            el: 'body.account-index',

            data: {
                selectedPlayer : 0
            },

            methods: {
                activate    : require('../../methods/activate'),
                isActivated : require('../../methods/is-activated')
            }
        });

    }
})(window, document);
