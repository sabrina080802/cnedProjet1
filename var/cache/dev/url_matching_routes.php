<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin.category', '_controller' => 'App\\Controller\\AdminCategoryController::index'], null, null, null, false, false, null]],
        '/admin/categories/addCategory' => [[['_route' => 'admin.add.category', '_controller' => 'App\\Controller\\AdminCategoryController::addCategory'], null, null, null, false, false, null]],
        '/admin/categories/deleteCategory' => [[['_route' => 'admin.delete.category', '_controller' => 'App\\Controller\\AdminCategoryController::deleteCategory'], null, null, null, false, false, null]],
        '/admin/formations' => [[['_route' => 'admin.formations', '_controller' => 'App\\Controller\\AdminFormationsController::index'], null, null, null, false, false, null]],
        '/admin/formations/form' => [[['_route' => 'admin.formations.form', '_controller' => 'App\\Controller\\AdminFormationsController::create'], null, null, null, false, false, null]],
        '/admin/formations/title' => [[['_route' => 'admin.formations.title', '_controller' => 'App\\Controller\\AdminFormationsController::searchByTitle'], null, null, null, false, false, null]],
        '/admin/formations/playlist' => [[['_route' => 'admin.formations.playlist', '_controller' => 'App\\Controller\\AdminFormationsController::searchByPlaylist'], null, null, null, false, false, null]],
        '/admin/formations/remove' => [[['_route' => 'admin.formations.remove', '_controller' => 'App\\Controller\\AdminFormationsController::remove'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists', '_controller' => 'App\\Controller\\AdminPlaylistsController::index'], null, null, null, false, false, null]],
        '/admin/playlist/search' => [[['_route' => 'admin.playlists.search', '_controller' => 'App\\Controller\\AdminPlaylistsController::search'], null, null, null, false, false, null]],
        '/admin/playlists/form' => [[['_route' => 'admin.playlists.form', '_controller' => 'App\\Controller\\AdminPlaylistsController::create'], null, null, null, false, false, null]],
        '/admin/playlists/remove' => [[['_route' => 'admin.playlists.remove', '_controller' => 'App\\Controller\\AdminPlaylistsController::remove'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.authenticate', '_controller' => 'App\\Controller\\AuthenticateController::index'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/oauth/login' => [[['_route' => 'oauth_login', '_controller' => 'App\\Controller\\OAuthController::index'], null, null, null, false, false, null]],
        '/oauth/callback' => [[['_route' => 'oauth_check', '_controller' => 'App\\Controller\\OAuthController::connectCheckAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\OAuthController::logout'], null, null, null, false, false, null]],
        '/playlists' => [[['_route' => 'playlists', '_controller' => 'App\\Controller\\PlaylistsController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|categories/tri/([^/]++)/([^/]++)(*:49)'
                    .'|formations/([^/]++)/([^/]++)(*:84)'
                    .'|playlist(?'
                        .'|/([^/]++)/([^/]++)(*:120)'
                        .'|s/recherche/([^/]++)(?:/([^/]++))?(*:162)'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(*:208)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:248)'
                    .'|formation/([^/]++)(*:274)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:318)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:358)'
                    .'|playlist/([^/]++)(*:383)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:423)'
                    .'|wdt/([^/]++)(*:443)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:489)'
                            .'|router(*:503)'
                            .'|exception(?'
                                .'|(*:523)'
                                .'|\\.css(*:536)'
                            .')'
                        .')'
                        .'|(*:546)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'admin.categories.sort', '_controller' => 'App\\Controller\\AdminCategoryController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        84 => [[['_route' => 'admin.formations.tri', '_controller' => 'App\\Controller\\AdminFormationsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        120 => [[['_route' => 'admin.playlists.tri', '_controller' => 'App\\Controller\\AdminPlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        162 => [[['_route' => 'admin.playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\AdminPlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        208 => [[['_route' => 'formations.sort', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        248 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        274 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        358 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        383 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        443 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        489 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        503 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        523 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        536 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        546 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
