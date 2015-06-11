<?php

require_once apolune_path('Account/Http/routes.php');
require_once apolune_path('Support/Http/routes.php');

$router->get('/', function () {
    return redirect('/account');
});

$router->group(['namespace' => 'pandaac\ThemeTibia\Http\Controllers'], function ($router) {
    $router->get('/api/name', 'ApiController@suggestName');
});
