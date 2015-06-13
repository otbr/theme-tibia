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
        $path = realpath(__DIR__.'/../..');

        $this->loaders($path);
        $this->publisher($path);
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

    /**
     * Define the location of where to load certain resources.
     *
     * @param  string  $path
     * @return void
     */
    private function loaders($path)
    {
        $this->loadViewsFrom(
            "${path}/resources/views", 'theme'
        );

        $this->loadTranslationsFrom(
            "${path}/resources/lang", 'theme'
        );
    }

    /**
     * Define which resources should be published, and to where.
     *
     * @param  string  $path
     * @return void
     */
    private function publisher($path)
    {
        $this->publishes([
                "${path}/public"    => public_path($this->namespace),
        ], 'public');

        $this->publishes([
            "${path}/resources/views"   => theme_path($this->namespace.'/views'),
            "${path}/resources/lang"    => theme_path($this->namespace.'/lang'),
        ], 'theme');
    }
}
