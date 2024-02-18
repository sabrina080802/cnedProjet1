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
        383 => [
            [['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
