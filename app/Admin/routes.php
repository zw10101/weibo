<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => 'App\\Admin\\Controllers',
    'middleware'    => config('admin.route.middleware'),
],function (Router $router) {

    // Route::resource('user', UserController::class);
    $router->resource('game-hot', gameHotController::class); //游戏热门设置
    $router->resource('user-level', userLevelController::class); //vip设置
});

