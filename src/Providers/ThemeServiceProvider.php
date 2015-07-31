<?php

namespace pandaac\ThemeTibia\Providers;

use Apolune\Core\ThemeServiceProvider as ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Define the theme namespace.
     *
     * @var string
     */
    protected $namespace = 'pandaac/theme-tibia';

    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        RouteServiceProvider::class,
        BladeServiceProvider::class,
        ComposerServiceProvider::class,
    ];

    /**
     * The paths that should be published.
     *
     * @var array
     */
    protected $publish = [
        'public' => [
            '../../resources/img'       => 'public/pandaac/theme-tibia/img',
            '../../resources/fonts'     => 'public/pandaac/theme-tibia/fonts',
            '../../public/build'        => 'public/pandaac/theme-tibia/build',
        ],
        'config' => [
            '../../config'              => 'config/pandaac/theme-tibia',
        ],
        'theme' => [
            '../../config'              => 'themes/pandaac/theme-tibia/config',
            '../../public'              => 'themes/pandaac/theme-tibia/public',
            '../../resources'           => 'themes/pandaac/theme-tibia/resources',
            '../../src'                 => 'themes/pandaac/theme-tibia/src',
            '../../.gitignore'          => 'themes/pandaac/theme-tibia/.gitignore',
            '../../composer.json'       => 'themes/pandaac/theme-tibia/composer.json',
            '../../gulpfile.js'         => 'themes/pandaac/theme-tibia/gulpfile.js',
            '../../package.json'        => 'themes/pandaac/theme-tibia/package.json',
        ],
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getViewsFrom('../../resources/views');
        $this->getTranslationsFrom('../../resources/lang');
    }
}
