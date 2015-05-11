var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'resources/';
elixir.config.publicDir = 'assets/';
elixir.config.cssOutput = elixir.config.publicDir + 'css/';
elixir.config.jsOutput = elixir.config.publicDir + 'js/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.less('tibia.less');
	mix.scripts('app.js', 'assets/js/app.min.js');

	mix.task('publish_assets');
	mix.registerWatcher('publish_assets', elixir.config.publicDir + '/**/*');
});

gulp.task('publish_assets', shell.task([
	"php ../../../artisan vendor:publish --tag=public --force"
]));
