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
        '/admin/formations/playlist' => [[['_route' => 'admin.formations.byplaylist', '_controller' => 'App\\Controller\\AdminFormationsController::searchByPlaylist'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists', '_controller' => 'App\\Controller\\AdminPlaylistsController::index'], null, null, null, false, false, null]],
        '/admin/playlists/form' => [[['_route' => 'admin.playlists.form', '_controller' => 'App\\Controller\\AdminPlaylistsController::edit'], null, null, null, false, false, null]],
        '/admin/playlist/search' => [[['_route' => 'admin.playlists.search', '_controller' => 'App\\Controller\\AdminPlaylistsController::search'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
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
                        .'|s/([^/]++)(*:112)'
                        .'|/([^/]++)/([^/]++)(*:138)'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:198)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:238)'
                    .'|formation/([^/]++)(*:264)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:308)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:348)'
                    .'|playlist/([^/]++)(*:373)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:413)'
                    .'|wdt/([^/]++)(*:433)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:479)'
                            .'|router(*:493)'
                            .'|exception(?'
                                .'|(*:513)'
                                .'|\\.css(*:526)'
                            .')'
                        .')'
                        .'|(*:536)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'admin.categories.sort', '_controller' => 'App\\Controller\\AdminCategoryController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        84 => [[['_route' => 'admin.formations.tri', '_controller' => 'App\\Controller\\AdminFormationsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        112 => [[['_route' => 'admin.playlists.remove', '_controller' => 'App\\Controller\\AdminPlaylistsController::remove'], ['id'], null, null, false, true, null]],
        138 => [[['_route' => 'admin.playlists.tri', '_controller' => 'App\\Controller\\AdminPlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        198 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        238 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        264 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        348 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        373 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        413 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        433 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        479 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        493 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        513 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        526 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        536 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
