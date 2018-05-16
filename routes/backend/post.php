<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 16:20:44
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 11:04:53
 */

Route::group(['namespace' => 'Post'], function () {

    /*
     * User Status'
     */
    // Route::get('Post/deactivated', 'UserStatusController@getDeactivated')->name('Post.deactivated');
    // Route::get('Post/deleted', 'UserStatusController@getDeleted')->name('Post.deleted');

    /*
     * User CRUD
     */
    Route::resource('post', 'PostController');

    /*
     * Specific User
     */
    Route::group(['prefix' => 'post/{post}'], function () {
       
    });
});