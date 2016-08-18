(function (window, document, undefined) {

    var Vue = require('vue');
    var Cookies = require('cookies-js');

    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    Vue.config.prefix = 'data-v-';

    new Vue({
        el: 'aside.column',

        data: {
            navigation : JSON.parse(Cookies.get('navigation') || null) || ['news']
        },

        methods: {
            toggle          : require('./methods/toggle'),
            isToggled       : require('./methods/is-toggled'),
            toggleNav       : require('./methods/toggle-nav'),
            isNavToggled    : require('./methods/is-nav-toggled')
        },

        created: function () {
            var menuItems = document.querySelectorAll('.navigation-item.open');

            [].forEach.call(menuItems, function (menuItem) {
                menuItem.classList.toggle('open');
            });
        }
    });

    require('./routes/routes');

})(window, document);
