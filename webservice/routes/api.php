<?php

Route::group([
    'middleware' => ['cors', 'api'],
], function () {
    Route::post('/auth/token/issue', 'AuthController@issueToken');
    Route::post('/auth/token/refresh', 'AuthController@refreshToken');

    Route::group([
//        'middleware' => 'jwt.auth',
    ], function () {
        Route::post('/auth/token/revoke', 'AuthController@revokeToken');

        Route::get('/menu/sidebar', 'MenuController@sidebar');

        Route::get('/categories/full-list', 'CategoriesController@fullList');

        Route::resource('/categories', 'CategoriesController', [
            'except' => ['create', 'edit'],
        ]);

        Route::resource('/products', 'ProductsController', [
            'except' => ['create', 'edit'],
        ]);

        Route::get('/me', 'MeController@show');


/*
Actions Handled By Resource Controller

Verb        URI                     Action      Route Name
====        ===                     ======      ==========
GET         /photos                 index       photos.index
GET         /photos/create          create      photos.create
POST        /photos                 store       photos.store
GET         /photos/{photo}         show        photos.show
GET         /photos/{photo}/edit    edit        photos.edit
PUT/PATCH   /photos/{photo}         update      photos.update
DELETE      /photos/{photo}         destroy     photos.destroy
*/

        /*
        API Group for version 1.0
        Base endpoint: /api/v1
        */
        Route::group(['prefix' => 'v1'], function() {

            // path: GET /api/v1/tags/full-list
            Route::get('/tags/full-list', 'TagsController@fullList');
            
            // path: /api/v1/tags
            Route::resource('/tags', 'TagsController', [
                'except' => ['create', 'edit'],
            ]);                        
            Route::post('/tags/attach-product', 'TagsController@attachProduct');            
            
            // Customer Group
            Route::get('/customer-group/full-list','CustomerGroupController@fullList');
            Route::resource('/customer-group', 'CustomerGroupController', [
                'except' => ['create', 'edit'],
            ]);
            
            Route::get('/outlets/full-list','OutletController@fullList');

        });

    });
});
