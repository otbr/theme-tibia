(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-manage') !== -1) {
    
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

    }
})(window, document);
