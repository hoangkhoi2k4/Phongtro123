<?php

use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserRoomController;
use Illuminate\Support\Facades\Route;

Route::controller(UserRoomController::class) -> group(function(){
    Route::get('/user/room', 'index')->name('room.index');
    Route::get('/user/create', 'create')->name('room.create');
    Route::post('/user/create', 'store');

    Route::get('/user/update/{id}', 'edit')->name('room.update');
    Route::post('/user/update/{id}', 'update');
    Route::post('/user/delete/{id}', 'delete');

    Route::post('/uploads', 'uploadImages');
    Route::post('/upload', 'uploadVideo');

});
Route::controller(UserProfileController::class) -> group(function(){
    Route::get('/user/profile', 'home')->name('get_user.profile.index');
    Route::get('/user/update-profile', 'index')->name('get_user.profile.update.index');
    Route::post('/user/update-profile', 'update');

    Route::get('/user/update-phone', 'updatePhone')->name('get_user.profile.update_phone');
    Route::post('/user/update-phone', 'processUpdatePhone');

    Route::get('/user/update-password', 'updatePassword')->name('get_user.profile.update_password');
    Route::post('/user/update-password', 'processUpdatePassword');

    Route::get('/user/deposit-history', 'depositHistory')->name('get_user.profile.deposit_history');
    Route::get('/user/payment-history', 'paymentHistory')->name('get_user.profile.payment_history');
    Route::get('/user/price-list', 'priceList')->name('get_user.profile.price_list');
    Route::get('/user/deposit', 'deposit')->name('get_user.profile.deposit');
});