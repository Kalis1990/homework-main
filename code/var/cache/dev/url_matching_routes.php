<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/edit/article/([^/]++)(*:29)'
                .'|/view/article/([^/]++)(*:58)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:93)'
                .'|/article/([a-zA-Z0-9-]+)(*:124)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\EditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        58 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        124 => [
            [['_route' => 'app_article_view', '_controller' => 'App\\Controller\\ReadingTimeController::view'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
