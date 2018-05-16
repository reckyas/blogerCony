<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 17:08:46
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-09 17:17:36
 */

Breadcrumbs::register('admin.product.item.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('menus.backend.product.item.main'), route('admin.product.item.index'));
});

