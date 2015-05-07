var elixir = require('laravel-elixir');
var os = require('os');

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
	mix
		.less('tibia.less')
		.scripts(
			'app.js', 
			'assets/js/app.min.js'
		)
		.scripts(
			'faker.min.js',
			'assets/js/faker.min.js'
		);
	
	if (os.platform() == 'win32') {
		mix.copy('assets/', '../pandaac/public/pandaac/theme-tibia/');
	} else {
		mix.copy('assets/', '../../../public/pandaac/theme-tibia/');
	}
	mix.registerWatcher('copy', elixir.config.publicDir + '/**/*');
});
