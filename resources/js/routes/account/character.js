(function (window, document, undefined) {

    var Vue = require('vue');

    new Vue({
        el: 'body.account-character',

        data: {
            suggestedName : null
        },

        methods: {
            suggestWorld    : require('../../methods/suggest-world'),
            suggestName     : require('../../methods/suggest-name')
        }
    });

})(window, document);
