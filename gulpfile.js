var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'resources/';
elixir.config.publicDir = 'assets';
elixir.config.cssOutput = 'assets/css';
elixir.config.jsOutput = 'assets/js';

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
	
	mix.copy('assets', '../../../public/pandaac/theme-tibia');
	mix.registerWatcher('copy', elixir.config.publicDir + '/**/*');
});
