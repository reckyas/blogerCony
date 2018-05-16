<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 06:47:40
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 06:49:11
 */

Breadcrumbs::register('admin.product.category.index', function($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.product.category.main'), route('admin.product.category.index'));
});