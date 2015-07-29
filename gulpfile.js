var Elixir = require('laravel-elixir');

Elixir.config.assetsPath = 'resources/';
Elixir.config.publicPath = 'public/';
Elixir.config.sourcemaps = false;
Elixir.config.production = true;

require('./resources/js/elixir/artisan');

Elixir(function (mix) {
    mix
        .copy('resources/img', 'public/img')
        .less('app.less')
        .browserify('app.js')
        .version([
            'public/css/app.css',
            'public/js/app.js'
        ])
        .artisan(
            'vendor:publish --tag=public --force',
            'public/**/*',
            [
                'version'
            ]
        )
    ;
});
