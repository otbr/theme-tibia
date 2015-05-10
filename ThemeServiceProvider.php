<?php namespace pandaac\ThemeTibia;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

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
		$this->loadViewsFrom(__DIR__.'/views', 'theme');
		$this->loadTranslationsFrom(__DIR__.'/lang', 'theme');

		$this->publishes([
			__DIR__.'/assets' => public_path($this->namespace),
		], 'public');

		$this->publishes([
			__DIR__.'/lang' => theme_path($this->namespace.'/lang'),
			__DIR__.'/views' => theme_path($this->namespace.'/views'),
		], 'theme');
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		get('/', function() { return redirect('/account'); }); // Temporary redirect to /account until a default page has been set.
	}
	
}
