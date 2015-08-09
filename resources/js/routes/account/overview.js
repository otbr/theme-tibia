(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('account-overview') !== -1) {
    
        var Vue = require('vue');

        new Vue({
            el: 'body.account-overview',

            data: {
                selectedPlayer : 0
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
