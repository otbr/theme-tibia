(function (window, document, undefined) {

    var Vue = require('vue');
    var Cookies = require('cookies-js');

    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    new Vue({
        el: 'aside.column',

        data: {
            debug           : false,
            navigation      : JSON.parse(Cookies.get('navigation') || null) || ['news']
        },

        components: {
            'vue-debug'     : require('./components/vue-debug')
        },

        methods: {
            toggle          : require('./methods/toggle'),
            isToggled       : require('./methods/is-toggled'),
            toggleNav       : require('./methods/toggle-nav'),
            isNavToggled    : require('./methods/is-nav-toggled')
        }
    });

    require('./routes/routes');

})(window, document);
