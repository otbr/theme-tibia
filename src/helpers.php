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

if (! function_exists('cdn')) {
    /**
     * Create a link to a predefined CDN.
     *
     * @param  string  $type
     * @param  array  $variables  []
     * @return string
     */
    function cdn($type, array $variables = [])
    {
        $variables = array_merge($variables, [
            'client' => config('pandaac.theme-tibia.paths.client'),
        ]);

        if (! ($path = config(sprintf('pandaac.theme-tibia.paths.%s', $type)))) {
            return null;
        }

        foreach ($variables as $variable => $value) {
            $path = preg_replace('/\{'.preg_quote($variable, '/').'\}/i', $value, $path);
        }

        return $path;
    }
}

if (! function_exists('theme_elixir')) {
    /**
     * Get the path to a versioned Elixir file.
     *
     * @param  string  $file
     * @return string
     */
    function theme_elixir($file)
    {
        static $manifest = null;
        static $namespace = null;

        if (is_null($namespace)) {
            $namespace = app('theme.namespace');
        }

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents(public_path($namespace).'/build/rev-manifest.json'), true);
        }

        $file = preg_replace('/\/?'.preg_quote($namespace, '/').'\/?/i', null, $file);
        
        if (isset($manifest[$file])) {
            return asset($namespace.'/build/'.$manifest[$file]);
        }

        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}
