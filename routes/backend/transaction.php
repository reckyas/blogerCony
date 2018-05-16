<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-11 11:26:21
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-11 11:28:28
 */

Route::group([
    'prefix'     => 'transaction',
    'as'         => 'transaction.',
    'namespace'  => 'Transaction',
], function () {

        Route::group(['namespace' => 'Order'], function () {

            Route::resource('order', 'OrderController');

        });

        Route::group(['namespace' => 'Wallet'], function () {

            Route::resource('wallet', 'WalletController');

        });

});
