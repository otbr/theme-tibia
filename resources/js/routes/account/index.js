(function (window, document, undefined) {
    
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

})(window, document);
