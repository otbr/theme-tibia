(function (window, document, undefined) {
    
    var Vue = require('vue');
    var responsiveImageMaps = require('../../methods/image-maps');

    new Vue({
        el: 'body.library-maps',

        ready: function () {
            responsiveImageMaps('[usemap]');
        }
    });

})(window, document);
