var Vue = require('vue');
var Cookies = require('cookies-js');
var responsiveImageMaps = require('./methods/image-maps');

Vue.use(require('vue-resource'));

new Vue({
    el: '#skeleton',

    data: {
        debug           : true,
        toggleable      : [],
        navigation      : JSON.parse(Cookies.get('navigation') || null) || ['news'],
        selectedPlayer  : 0,
        suggestedName   : null
    },

    components: {
        'vue-debug'     : require('./components/vue-debug')
    },

    methods: {
        activate        : require('./methods/activate'),
        isActivated     : require('./methods/is-activated'),
        toggle          : require('./methods/toggle'),
        isToggled       : require('./methods/is-toggled'),
        toggleNav       : require('./methods/toggle-nav'),
        isNavToggled    : require('./methods/is-nav-toggled'),
        suggestWorld    : require('./methods/suggest-world'),
        suggestName     : require('./methods/suggest-name')
    },

    ready: function () {
        responsiveImageMaps('[usemap]');
    }
});
