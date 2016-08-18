<?php

namespace pandaac\ThemeTibia\Providers;

use Apolune\Core\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Holds the route path.
     *
     * @var string
     */
    protected static $route;

    /**
     * Holds the route blueprint.
     *
     * @var string
     */
    protected static $blueprint;

    /**
     * Holds the view path.
     *
     * @var string
     */
    protected static $view;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            // Get the current view path...
            if (is_null(static::$view)) {
                static::$view = preg_replace('/^(.*)\:\:/i', null, $view->getName());

                view()->share('__viewPath', static::$view);
            }

            // Get the current route blueprint...
            if (is_null(static::$blueprint) and $route = Route::getFacadeRoot()->current()) {
                static::$blueprint = $route->uri();

                view()->share('__routeBlueprint', static::$blueprint);
            }

            // Get the current route path...
            if (is_null(static::$route)) {
                static::$route = Route::getFacadeRoot()->getCurrentRequest()->path();

                view()->share('__routePath', static::$route);
            }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // ...
    }
}
