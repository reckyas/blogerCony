<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 11:06:36
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 12:08:57
 */

Breadcrumbs::register('admin.customer.index', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.customer.management'), route('admin.customer.index'));
});

Breadcrumbs::register('admin.customer.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.customer.index');
    $breadcrumbs->push(__('labels.backend.customer.create'), route('admin.customer.create'));
});

Breadcrumbs::register('admin.customer.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.customer.index');
    $breadcrumbs->push(__('labels.backend.customer.show'), route('admin.customer.show', $id));
});
