(function (window, document, undefined) {
    if (document.getElementsByTagName('body')[0].getAttribute('data-view') == 'library.maps') {
    
        var Vue = require('vue');
        var responsiveImageMaps = require('../../methods/image-maps');

        new Vue({
            el: 'body',

            ready: function () {
                responsiveImageMaps('[usemap]');
            }
        });

    }
})(window, document);
