<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | CoffeeScript Compiler Options
    |--------------------------------------------------------------------------
    */

    'options' => array(
        'filename' => null,
        'header' => '',
        'bare' => false,
    ),

    /*
    |--------------------------------------------------------------------------
    | CoffeeScript Storage Paths
    |--------------------------------------------------------------------------
    */

    'paths' => array(__DIR__.'/../coffee'),

    /*
    |--------------------------------------------------------------------------
    | CoffeeScript Routes Paths
    |--------------------------------------------------------------------------
    */

    'routes' => array(
        '',
    ),

    /*
    |--------------------------------------------------------------------------
    | CoffeeScript Routes extensions
    |--------------------------------------------------------------------------
    */

    'extensions' => array('js', 'coffee'),

);
