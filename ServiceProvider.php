<?php namespace pandaac\ThemeTibia;

use Illuminate\Routing\Router;
use Apolune\Core\Providers\ThemeServiceProvider;
use Illuminate\Contracts\Console\Kernel as Artisan;

class ServiceProvider extends ThemeServiceProvider {

	/**
	 * Define the theme namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'pandaac/theme-tibia';

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/views');

		$this->loadTranslationsFrom(__DIR__.'/lang');

		$this->loadOverridesFrom(__DIR__.'/packages');

		$this->publishes([
			__DIR__.'/assets' => public_path($this->namespace),
		], 'public');
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Temporary redirect to /account until a default page has been set.
		\Route::get('/', function() {
			return redirect('/account');
		});
	}
	
}
