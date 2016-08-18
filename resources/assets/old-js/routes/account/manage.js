(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].getAttribute('data-view') == 'account.manage') {
    
        var Vue = require('vue');

        new Vue({
            el: 'body',

            data: {
                toggleable : [],
            },

            methods: {
                toggle      : require('../../methods/toggle'),
                isToggled   : require('../../methods/is-toggled')
            },

            ready: function () {
                var elements = document.querySelectorAll('.repeater');

                [].forEach.call(elements, function (element) {
                    element.classList.toggle('repeater');
                });
            }
        });

    }
})(window, document);
