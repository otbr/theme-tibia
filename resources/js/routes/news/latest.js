(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('news-latest') !== -1) {
    
        var Vue = require('vue');

        new Vue({
            el: 'body.news-latest',

            data: {
                toggleable : [],
            },

            methods: {
                toggle      : require('../../methods/toggle'),
                isToggled   : require('../../methods/is-toggled')
            },

            created: function () {
                var toggleables = document.querySelectorAll('.box.ticker .plusminus.active');
                var newstickers = document.querySelectorAll('.box.ticker .hidden');

                [].forEach.call(toggleables, function (toggleable) {
                    toggleable.classList.toggle('active');
                });

                [].forEach.call(newstickers, function (newsticker) {
                    newsticker.classList.remove('hidden');
                });
            }
        });

    }
})(window, document);
