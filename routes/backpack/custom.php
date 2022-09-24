<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array)config('backpack.base.web_middleware', 'web'),
        (array)config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::get('/super-admin', function () {
        backpack_user()->assignRole('superAdmin');
        backpack_user()->givePermissionTo('user_manage', 'role_manage', 'permission_manage', 'word_manage', 'category_manage', 'tag_manage');
        return redirect('/admin');
    });

    Route::crud('category', 'CategoryCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('word', 'WordCrudController');
    Route::crud('definition', 'DefinitionCrudController');
}); // this should be the absolute last line of this file
