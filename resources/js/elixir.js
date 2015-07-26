var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

/**
 * Publish assets from the theme folder to the public directory.
 *
 * @param  string  watcher
 * @return this
 */
elixir.extend('publishAssets', function(watcher) {
    gulp.task('publishAssets', shell.task([
        "php ../../../artisan vendor:publish --tag=public --force"
    ]));

    return this.queueTask('publishAssets');
});
