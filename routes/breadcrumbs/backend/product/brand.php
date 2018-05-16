<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 05:17:19
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 05:36:28
 */

Breadcrumbs::register('admin.product.brand.index', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.product.brand.main'), route('admin.product.brand.index'));
});