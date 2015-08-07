(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-player-create-form') !== -1) {

        var Vue = require('vue');

        new Vue({
            el: 'body.account-player-create-form',

            data: {
                name : null
            },

            methods: {
                suggestWorld : require('../../methods/suggest-world'),

                /**
                 * Send an API request to generate a character name.
                 *
                 * @param  \Event  e
                 * @return void
                 */
                suggestName : function (e) {
                    e.preventDefault();
                    
                    var endpoint = baseurl + '/api/name';

                    this.$http.post(endpoint, function (response) {
                        this.name = response;
                    });
                },
            }
        });

    }
})(window, document);
