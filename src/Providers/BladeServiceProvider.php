<?php

namespace pandaac\ThemeTibia\Providers;

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
        $this->compileDirectives();
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

    /**
     * Compile all custom Blade directives.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function compileDirectives()
    {
        $blade = $this->app['view']->getEngineResolver()->resolve('blade')->getCompiler();

        return collect(get_class_methods(__CLASS__))
            ->filter(function ($item) {
                return str_contains($item, 'directive');
            })->each(function ($item, $key) use ($blade) {
                list($name, $method) = [
                    strtolower(preg_replace('/^directive/i', null, $item)),
                    $item
                ];

                $blade->directive($name, [$this, $method]);
            });
    }

    /**
     * Register a @title Blade directive.
     *
     * @param  string  $expression
     * @return string
     */
    protected function directiveTitle($expression)
    {
        $expression = preg_replace('/^\(/', '("title", ', $expression, 1);

        return "<?php echo \View::startSection{$expression}; ?>";
    }

    /**
     * Register a @navigation Blade directive.
     *
     * @param  string  $expression
     * @return string
     */
    protected function directiveNavigation($expression)
    {
        $expression = preg_replace('/^\(/', '("navigation", ', $expression, 1);

        return "<?php echo \View::startSection{$expression}; ?>";
    }

    /**
     * Register a @bodyclass Blade directive.
     *
     * @param  string  $expression
     * @return string
     */
    protected function directiveBodyclass($expression)
    {
        $expression = preg_replace('/^\(/', '("body", ', $expression, 1);

        return "<?php echo \View::startSection{$expression}; ?>";
    }
}
