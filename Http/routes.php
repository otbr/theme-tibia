<?php

require_once apolune_path('Account/Http/routes.php');
require_once apolune_path('Support/Http/routes.php');
require_once apolune_path('Library/Http/routes.php');
require_once apolune_path('News/Http/routes.php');

$router->group(['namespace' => 'pandaac\ThemeTibia\Http\Controllers'], function ($router) {
    $router->get('/api/name', 'ApiController@suggestName');
});
