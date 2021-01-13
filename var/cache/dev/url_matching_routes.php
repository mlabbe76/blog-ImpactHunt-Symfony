<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'app_hello_hello', '_controller' => 'App\\Controller\\HelloController::hello'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/hello/([^/]++)(*:57)'
                .'|/show/([^/]++)(*:78)'
                .'|/change_locale/([^/]++)(*:108)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => 'app_hello_helloname', '_controller' => 'App\\Controller\\HelloController::helloName'], ['name'], null, null, false, true, null]],
        78 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        108 => [
            [['_route' => 'change_locale', '_controller' => 'App\\Controller\\HomeController::changeLocale'], ['locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
