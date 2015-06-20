<?php

if (! function_exists('activate_menu')) {
    /**
     * If the current route matches the given path, return an active class.
     *
     * @param  string  $path
     * @param  string  $class  active
     * @return string
     */
    function activate_menu($path, $class = 'active')
    {
        return app('router')->is($path) ? $class : null;
    }
}
