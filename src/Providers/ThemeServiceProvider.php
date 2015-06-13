<?php

namespace pandaac\ThemeTibia\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'theme');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'theme');

        $this->publishes([
            __DIR__.'/../../public' => public_path($this->namespace),
        ], 'public');

        $this->publishes([
            __DIR__.'/../../resources/views' => theme_path($this->namespace.'/views'),
            __DIR__.'/../../resources/lang' => theme_path($this->namespace.'/lang'),
        ], 'theme');
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('pandaac\ThemeTibia\Providers\RouteServiceProvider');
    }
}
