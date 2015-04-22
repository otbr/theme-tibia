var elixir = require('laravel-elixir');
var config = require('laravel-elixir').config;

config.assetsDir = 'resources/';
config.publicDir = 'assets';
config.cssOutput = 'assets/css';
config.jsOutput = 'assets/js';

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
	mix
		.less('tibia.less')
		.scripts(
			'app.js', 
			'assets/js/app.min.js'
		);
});
