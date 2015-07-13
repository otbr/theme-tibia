<?php

namespace pandaac\ThemeTibia\Providers;

use Apolune\Core\ServiceProvider;
use pandaac\ThemeTibia\Http\Composers;
use Illuminate\Contracts\View\Factory as View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * The composers we want to register to certain views.
     *
     * @var array
     */
    protected $composers = [
        Composers\ServerComposer::class => [
            'theme::account.auth.create',
            'theme::account.auth.login',
            'theme::account.auth.logout',
            'theme::account.character.create',
            'theme::account.character.name',
            'theme::account.terminate',
        ],
    ];

    /**
     * Bootstrap any application services.
     *
     * @param  \Illuminate\Contracts\View\View  $view
     * @return void
     */
    public function boot(View $view)
    {
        $view->composers($this->composers);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
