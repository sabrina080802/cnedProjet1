<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'cgu' => [[], ['_controller' => 'App\\Controller\\AccueilController::cgu'], [], [['text', '/cgu']], [], [], []],
    'admin.category' => [[], ['_controller' => 'App\\Controller\\AdminCategoryController::index'], [], [['text', '/admin/category']], [], [], []],
    'admin.add.category' => [[], ['_controller' => 'App\\Controller\\AdminCategoryController::addCategory'], [], [['text', '/admin/categories/addCategory']], [], [], []],
    'admin.delete.category' => [[], ['_controller' => 'App\\Controller\\AdminCategoryController::deleteCategory'], [], [['text', '/admin/categories/deleteCategory']], [], [], []],
    'admin.categories.sort' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\AdminCategoryController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/admin/categories/tri']], [], [], []],
    'admin.formations' => [[], ['_controller' => 'App\\Controller\\AdminFormationsController::index'], [], [['text', '/admin/formations']], [], [], []],
    'admin.formations.tri' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\AdminFormationsController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/admin/formations']], [], [], []],
    'admin.formations.form' => [[], ['_controller' => 'App\\Controller\\AdminFormationsController::create'], [], [['text', '/admin/formations/form']], [], [], []],
    'admin.formations.title' => [[], ['_controller' => 'App\\Controller\\AdminFormationsController::searchByTitle'], [], [['text', '/admin/formations/title']], [], [], []],
    'admin.formations.playlist' => [[], ['_controller' => 'App\\Controller\\AdminFormationsController::searchByPlaylist'], [], [['text', '/admin/formations/playlist']], [], [], []],
    'admin.formations.remove' => [[], ['_controller' => 'App\\Controller\\AdminFormationsController::remove'], [], [['text', '/admin/formations/remove']], [], [], []],
    'admin.playlists' => [[], ['_controller' => 'App\\Controller\\AdminPlaylistsController::index'], [], [['text', '/admin/playlists']], [], [], []],
    'admin.playlists.tri' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\AdminPlaylistsController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/admin/playlist']], [], [], []],
    'admin.playlists.search' => [[], ['_controller' => 'App\\Controller\\AdminPlaylistsController::search'], [], [['text', '/admin/playlist/search']], [], [], []],
    'admin.playlists.form' => [[], ['_controller' => 'App\\Controller\\AdminPlaylistsController::create'], [], [['text', '/admin/playlists/form']], [], [], []],
    'admin.playlists.findallcontain' => [['champ', 'table'], ['table' => '', '_controller' => 'App\\Controller\\AdminPlaylistsController::findAllContain'], [], [['variable', '/', '[^/]++', 'table', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/admin/playlists/recherche']], [], [], []],
    'admin.playlists.remove' => [[], ['_controller' => 'App\\Controller\\AdminPlaylistsController::remove'], [], [['text', '/admin/playlists/remove']], [], [], []],
    'admin.authenticate' => [[], ['_controller' => 'App\\Controller\\AuthenticateController::index'], [], [['text', '/admin']], [], [], []],
    'formations' => [[], ['_controller' => 'App\\Controller\\FormationsController::index'], [], [['text', '/formations']], [], [], []],
    'formations.sort' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\FormationsController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/formations/tri']], [], [], []],
    'formations.findallcontain' => [['champ', 'table'], ['table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], [], [['variable', '/', '[^/]++', 'table', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/formations/recherche']], [], [], []],
    'formations.showone' => [['id'], ['_controller' => 'App\\Controller\\FormationsController::showOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formations/formation']], [], [], []],
    'oauth_login' => [[], ['_controller' => 'App\\Controller\\OAuthController::index'], [], [['text', '/oauth/login']], [], [], []],
    'oauth_check' => [[], ['_controller' => 'App\\Controller\\OAuthController::connectCheckAction'], [], [['text', '/oauth/callback']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\OAuthController::logout'], [], [['text', '/logout']], [], [], []],
    'playlists' => [[], ['_controller' => 'App\\Controller\\PlaylistsController::index'], [], [['text', '/playlists']], [], [], []],
    'playlists.sort' => [['champ', 'ordre'], ['_controller' => 'App\\Controller\\PlaylistsController::sort'], [], [['variable', '/', '[^/]++', 'ordre', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/playlists/tri']], [], [], []],
    'playlists.findallcontain' => [['champ', 'table'], ['table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], [], [['variable', '/', '[^/]++', 'table', true], ['variable', '/', '[^/]++', 'champ', true], ['text', '/playlists/recherche']], [], [], []],
    'playlists.showone' => [['id'], ['_controller' => 'App\\Controller\\PlaylistsController::showOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/playlists/playlist']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
