<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-11 12:18:51
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-11 12:19:46
 */

Breadcrumbs::register('admin.transaction.wallet.index', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push(__('menus.backend.transaction.wallet.management'), route('admin.transaction.wallet.index'));
});