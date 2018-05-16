<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 16:20:44
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 11:04:53
 */

Route::group(['namespace' => 'Customer'], function () {

    /*
     * User Status'
     */
    // Route::get('customer/deactivated', 'UserStatusController@getDeactivated')->name('customer.deactivated');
    // Route::get('customer/deleted', 'UserStatusController@getDeleted')->name('customer.deleted');

    /*
     * User CRUD
     */
    Route::resource('customer', 'CustomerController');

    /*
     * Specific User
     */
    Route::group(['prefix' => 'customer/{customer}'], function () {
       
    });
});