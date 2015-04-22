<?php namespace pandaac\ThemeTibia;

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
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	
}
