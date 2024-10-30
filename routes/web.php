<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\User\UserRoomController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

// Add the missing import statement

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class) -> group(function(){
    Route::get('/', 'index')->name("home");
    Route::get('/home', 'index')->name("home");
});

Route::controller(LoginController::class) -> group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login');

    Route::get('/logout','logout')->name('logout');
});
Route::controller(RegisterController::class) -> group(function(){
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'register')->name('register');
});


Route::get('/posting_list', function(){
    return view('user.postingList');
}) -> name('posting_list');

Route::get('/post', function(){
    return view('user.post');
}) -> name('post');

Route::controller(CategoryController::class) -> group(function(){
    Route::get('chuyen-muc-{slug}-{id}', 'index') 
    -> name('get.category.item')
    -> where(['slug' => '[a-z-0-9]+', 'id' => '[0-9]+',]);

    Route::get('user/page/{page}', 'page') -> name('get.category.page');
});

@include('route_user.php');
@include('route_admin.php');