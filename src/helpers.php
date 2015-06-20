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
        $sections = app('view')->getSections();

        $navigation = isset($sections['navigation']) ? trim($sections['navigation']) : null;

        return str_is($path, $navigation) ? $class : null;
    }
}
