(function (window, document, undefined) {
    
    var Vue = require('vue');

    new Vue({
        el: 'body.account-manage',

        data: {
            toggleable : [],
        },

        methods: {
            toggle      : require('../../methods/toggle'),
            isToggled   : require('../../methods/is-toggled')
        }
    });

})(window, document);
