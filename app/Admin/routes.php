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

    $router->resource('categories', CategoryController::class);
    $router->resource('sub-categories', SubCategoryController::class);

    $router->resource('videos', VideoController::class);

    $router->get('/category_wise_sub_category', 'CategoryController@subCategory');

});
