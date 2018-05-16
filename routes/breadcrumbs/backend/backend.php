<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/product.php';
require __DIR__.'/customer.php';
require __DIR__.'/transaction.php';
require __DIR__.'/log-viewer.php';
require __DIR__.'/post.php';
