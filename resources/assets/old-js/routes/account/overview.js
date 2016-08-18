(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].getAttribute('data-view') == 'account.overview') {
    
        var Vue = require('vue');
        var Cookies = require('cookies-js');

        new Vue({
            el: 'body',

            data: {
                selectedPlayer : parseInt(Cookies.get('selectedPlayer')) || 0
            },

            methods: {
                activate    : require('../../methods/activate'),
                isActivated : require('../../methods/is-activated')
            },

            ready: function () {
                var elements = document.querySelectorAll('.play-integer, .play-button, .play-button-red, .character-buttons');

                [].forEach.call(elements, function (element) {
                    element.classList.toggle('hidden');
                });
            }
        });

    }
})(window, document);
