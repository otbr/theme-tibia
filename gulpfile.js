var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'resources/';
elixir.config.publicPath = 'public/';
elixir.config.production = true;
elixir.config.sourcemaps = false;

gulp.task('publishAssets', shell.task([
    "php ../../../artisan vendor:publish --tag=public --force"
]));

elixir(function(mix) {
    mix
        .less('app.less')
        .browserify('app.js', 'app.min.js')
        .copy('resources/img', 'public/img')
        .version([
            'public/css/app.css',
            'public/js/app.min.js'
        ])

        .task('publishAssets', 'public/**/*')
    ;
});
