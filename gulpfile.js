var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = './resources/';
elixir.config.publicPath = './public/';
elixir.config.sourcemaps = false;
elixir.config.production = true;

gulp.task('vendor:publish', function () {
    return gulp.src('').pipe(shell('php ../../../artisan vendor:publish --tag=public --force'));
});

elixir(function (mix) {
    mix
        .copy('./resources/img', './public/img')
        .copy('./resources/fonts', './public/fonts')
        .less('app.less')
        .browserify('app.js')
        .version([
            './public/css/app.css',
            './public/js/app.js'
        ])
        .task('vendor:publish', './public/**/*')
    ;
});
