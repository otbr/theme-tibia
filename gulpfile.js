var Elixir = require('laravel-elixir');

// require('laravel-elixir-vue');
require('laravel-elixir-artisan-unofficial');

Elixir.config.assetsPath = './resources/assets/';
Elixir.config.publicPath = './public/';
Elixir.config.sourcemaps = false;
Elixir.config.production = true;

Elixir(function (mix) {
    mix.sass('app.scss')
       .webpack('app.js')
       .version([
            Elixir.config.publicPath + 'css/app.css',
            Elixir.config.publicPath + 'js/app.js'
       ])
       .artisan('vendor:publish --tag=public --force', {
            // watcher: Elixir.config.publicPath + 'build/rev-manifest.json',
       });
});






// var gulp = require('gulp');
// var shell = require('gulp-shell');
// var elixir = require('laravel-elixir');

// elixir.config.assetsPath = './resources/assets/';
// elixir.config.publicPath = './public/';
// elixir.config.sourcemaps = false;
// elixir.config.production = true;

// elixir.extend('artisan', function (command, watcher) {
//     new elixir.Task('artisan', function () {
//         return gulp.src('').pipe(shell('php ../../../artisan ' + command));
//     })
//     .watch(watcher);
// });

// elixir(function (mix) {
//     mix
//         .sass('app.scss')
//         .browserify('app.js')
//         .version([
//             elixir.config.publicPath + 'css/app.css',
//             elixir.config.publicPath + 'js/app.js'
//         ])
//         .artisan(
//             'vendor:publish --tag=public --force', 
//             elixir.config.publicPath + 'build/rev-manifest.json'
//         )
//     ;
// });
