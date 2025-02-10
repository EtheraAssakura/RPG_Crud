<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_personnage_index' => [[], ['_controller' => 'App\\Controller\\PersonnageController::index'], [], [['text', '/personnage']], [], [], []],
    'app_personnage_new' => [[], ['_controller' => 'App\\Controller\\PersonnageController::new'], [], [['text', '/bo/new']], [], [], []],
    'app_personnage_show' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::show'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_personnage_edit' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/bo']], [], [], []],
    'app_personnage_delete' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bo']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\PersonnageController::index' => [[], ['_controller' => 'App\\Controller\\PersonnageController::index'], [], [['text', '/personnage']], [], [], []],
    'App\Controller\PersonnageController::new' => [[], ['_controller' => 'App\\Controller\\PersonnageController::new'], [], [['text', '/bo/new']], [], [], []],
    'App\Controller\PersonnageController::show' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::show'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\PersonnageController::edit' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/bo']], [], [], []],
    'App\Controller\PersonnageController::delete' => [['id'], ['_controller' => 'App\\Controller\\PersonnageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bo']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\UserController::login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\UserController::logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], [], []],
];
