<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client Version
    |--------------------------------------------------------------------------
    |
    | In order to get the relative images from the CDN, you must specify the
    | client version that your server relies on.
    |
    | Available options can be found at https://cdn.pandaac.io/versions
    |
    */

    'client' => 1076,

    /*
    |--------------------------------------------------------------------------
    | Items Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your items images from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/items/{client}/{item}
    |
    */
   
    'items' => 'https://cdn.pandaac.io/items/{client}/{item}',

    /*
    |--------------------------------------------------------------------------
    | Creatures Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your creature images from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/creatures/{client}/{creature}
    |
    */
   
    'creatures' => 'https://cdn.pandaac.io/creatures/{client}/{creature}',

    /*
    |--------------------------------------------------------------------------
    | Creature Headers Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your creature headers from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/custom/theme-tibia/pedestal/{creature}
    |
    */
   
    'creature-headers' => 'https://cdn.pandaac.io/custom/theme-tibia/pedestal/{creature}',

    /*
    |--------------------------------------------------------------------------
    | Spells Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your spells images from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/spells/{client}/{spell}
    |
    */
   
    'spells' => 'https://cdn.pandaac.io/spells/{client}/{spell}',

    /*
    |--------------------------------------------------------------------------
    | Maps Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your maps images from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/custom/theme-tibia/maps/{map}
    |
    */
   
    'maps' => 'https://cdn.pandaac.io/custom/theme-tibia/maps/{map}',

    /*
    |--------------------------------------------------------------------------
    | Flags Path
    |--------------------------------------------------------------------------
    |
    | Enter the path to where you want to load your flag images from. May
    | be a relative link (from the public/ folder) or an absolute link
    | (e.g. a CDN).
    |
    | The default is https://cdn.pandaac.io/flags/master/{flag}
    |
    */
   
    'flags' => 'https://cdn.pandaac.io/flags/master/{flag}',

];
