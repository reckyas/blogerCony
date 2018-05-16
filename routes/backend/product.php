<?php

/**
 * All route names are prefixed with 'admin.auth'.
 */
Route::group([
    'prefix'     => 'product',
    'as'         => 'product.',
    'namespace'  => 'Product',
], function () {

        Route::group(['namespace' => 'Item'], function () {

            Route::resource('item', 'ItemController');

        });

        Route::group(['namespace' => 'Category'], function () {

            Route::resource('category', 'CategoryController');

        });

        Route::group(['namespace' => 'Brand'], function () {

            Route::resource('brand', 'BrandController');

        });

});
