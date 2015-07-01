module.exports = function (selector) {
    window.addEventListener('resize', function (e) {
        responsiveImageMaps(selector);
    });

    window.dispatchEvent(new Event('resize'));
};


function responsiveImageMaps (selector) {
    var images = document.querySelectorAll(selector);

    [].forEach.call(images, function (image) {
        if (typeof(image.getAttribute('usemap')) == 'undefined') {
            return;
        }

        var mapSelector = image.getAttribute('usemap').replace('#', ''),
            defaultWidth = image.offsetWidth,
            defaultHeight = image.offsetHeight,
            width = image.getAttribute('width'),
            height = image.getAttribute('height');

        if (! width || ! height) {
            var tmp = new Image();
            tmp.src = image.getAttribute('src');

            if (! width) {
                width = tmp.width;
            }

            if (! height) {
                height = tmp.height;
            }
        }

        console.log({
            'width': width,
            'defaultWidth': defaultWidth,
            'height': height,
            'defaultHeight': defaultHeight
        });

        if (defaultHeight === 0) {
            defaultHeight = Math.round(height * (defaultWidth / width));
            console.log({
                'width': width,
                'defaultWidth': defaultWidth,
                'height': height,
                'defaultHeight': defaultHeight
            });
        }

        var widthPercentage = defaultWidth / 100,
            heightPercentage = defaultHeight / 100;

        var map = document.querySelectorAll('map[name="' + mapSelector + '"] area');
        [].forEach.call(map, function (area) {
            if (! area.dataset.coords) {
                area.dataset['coords'] = area.getAttribute('coords');
            }

            var coords = area.dataset.coords.split(','),
                coordsPercentage = new Array(coords.length);

            for (var i = 0; i < coordsPercentage.length; ++i) {
                if (i % 2 === 0) {
                    coordsPercentage[i] = parseInt(((coords[i] / width) * 100) * widthPercentage);
                } else {
                    coordsPercentage[i] = parseInt(((coords[i] / height) * 100) * heightPercentage);
                }
            }

            area.setAttribute('coords', coordsPercentage.toString());
        });
    });
}
