<?php

$router->get('/', function()
{
	return redirect('/account');
});

$router->get('/api/name', 'ApiController@suggestName');
