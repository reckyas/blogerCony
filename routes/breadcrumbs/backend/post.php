<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 11:06:36
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 12:08:57
 */

Breadcrumbs::register('admin.post.index', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.post.management'), route('admin.post.index'));
});

Breadcrumbs::register('admin.post.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(__('labels.backend.post.create'), route('admin.post.create'));
});

Breadcrumbs::register('admin.post.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(__('labels.backend.post.show'), route('admin.post.show', $id));
});
