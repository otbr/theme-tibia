(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].className.indexOf('library-maps') !== -1) {
    
        var Vue = require('vue');
        var responsiveImageMaps = require('../../methods/image-maps');

        new Vue({
            el: 'body.library-maps',

            ready: function () {
                responsiveImageMaps('[usemap]');
            }
        });

    }
})(window, document);
