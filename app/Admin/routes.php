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
    $router->resource('audio', AudioController::class);
    $router->resource('books', BookController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('madrasas', MadrasaController::class);
    $router->resource('profiles', ProfileController::class);
    $router->resource('profile-certifications', ProfileCertificationController::class);
    $router->resource('profile-characteristics', ProfileCharacteristicController::class);
    $router->resource('kholafas', KholafaController::class);
    $router->resource('shaekhs', ShaekhController::class);
    $router->resource('notices', NoticeController::class);
    $router->resource('events', EventController::class);
    $router->resource('carosels', CaroselController::class);
    $router->resource('family', ProfileFamilyController::class);
    $router->resource('headers', HeaderController::class);
    $router->resource('page_infos', PageInfoController::class);
    $router->resource('footers', FooterController::class);

    $router->get('/category_wise_sub_category', 'CategoryController@subCategory');

});
