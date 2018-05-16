<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-11 11:25:29
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-11 12:19:21
 */

Breadcrumbs::register('admin.transaction.order.index', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.transaction.order.management'), route('admin.transaction.order.index'));
});