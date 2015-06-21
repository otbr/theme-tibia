<?php

namespace pandaac\ThemeTibia\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('title', function($expression) {
            $expression = preg_replace('/^\(/', '("title", ', $expression, 1);

            return "<?php echo \View::startSection{$expression}; ?>";
        });

        Blade::directive('navigation', function($expression) {
            $expression = preg_replace('/^\(/', '("navigation", ', $expression, 1);

            return "<?php echo \View::startSection{$expression}; ?>";
        });

        Blade::directive('bodyclass', function($expression) {
            $expression = preg_replace('/^\(/', '("body", ', $expression, 1);

            return "<?php echo \View::startSection{$expression}; ?>";
        });
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
