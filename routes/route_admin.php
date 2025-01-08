<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminLocationController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['admin'])->group(function () {
    Route::controller(AdminLocationController::class)->group(function () {
        Route::get('/admin/location/room', 'index')->name('get_admin_location.index');
        Route::get('/admin/location/create', 'create')->name('get_admin_location.create');
        Route::post('/admin/location/create', 'store');

        Route::get('/admin/location/update/{id}', 'edit')->name('get_admin_location.update');
        Route::post('/admin/location/update/{id}', 'update');
        Route::post('/admin/location/delete/{id}', 'delete')->name('get_admin_location.delete');
    });
    Route::controller(AdminCategoryController::class)->group(function () {
        Route::get('/admin/category/room', 'index')->name('get_admin_category.index');
        Route::get('/admin/category/create', 'create')->name('get_admin_category.create');
        Route::post('/admin/category/create', 'store');

        Route::get('/admin/category/update/{id}', 'edit')->name('get_admin_category.update');
        Route::post('/admin/category/update/{id}', 'update');
        Route::post('/admin/category/delete/{id}', 'delete')->name('get_admin_category.delete');
    });
    Route::controller(AdminUserController::class)->group(function () {
        Route::get('/admin/user/room', 'index')->name('get_admin_user.index');
    });

    Route::controller(AdminRoomController::class)->group(function () {
        Route::get('/admin/room/index', 'index')->name('get_admin_room.index');
        Route::get('/admin/room/create', 'create')->name('get_admin_room.create');
        Route::post('/admin/room/create', 'store');
        Route::get('/admin/room/success/{id}', 'success')->name('get_admin_room.success');
        Route::get('/admin/room/hidden/{id}', 'hidden')->name('get_admin_room.hidden');
        Route::get('/admin/room/cancel/{id}', 'cancel')->name('get_admin_room.cancel');
        Route::post('/admin/room/cancel/{id}', 'processCancelRoom');

        Route::get('/admin/room/update/{id}', 'edit')->name('get_admin_room.update');
        Route::post('/admin/room/update/{id}', 'update');
        Route::post('/admin/room/delete/{id}', 'delete')->name('get_admin_room.delete');
    });
});
