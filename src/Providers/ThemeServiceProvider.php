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
     * Holds all of the service providers we want to register.
     *
     * @var array
     */
    protected $providers = [
        RouteServiceProvider::class,
        BladeServiceProvider::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../..');

        $this->loaders($path);
        $this->publisher($path, $this->namespace);
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Define the location of where to load certain resources.
     *
     * @param  string  $path
     * @return void
     */
    private function loaders($path)
    {
        $this->loadViewsFrom("${path}/resources/views", 'theme');
        $this->loadTranslationsFrom("${path}/resources/lang", 'theme');
    }

    /**
     * Define which resources should be published, and to where.
     *
     * @param  string  $path
     * @param  string  $namespace
     * @return void
     */
    private function publisher($path, $namespace)
    {
        $this->publishes(["${path}/public" => public_path($namespace)], 'public');
        $this->publishes(["${path}/config" => base_path("config/${namespace}")], 'config');
        $this->publishes([
            "${path}/resources/views" => theme_path($namespace.'/views'),
            "${path}/resources/lang" => theme_path($namespace.'/lang'),
        ], 'theme');
    }
}
