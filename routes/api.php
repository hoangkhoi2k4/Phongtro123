<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){ // người dùng phải đăng nhập mới được sử dụng api
    Route::get('get-rooms', [RoomController::class, 'getRooms']);
    Route::get('get-room/{id}', [RoomController::class, 'getRoom']);
    Route::post('create-room', [RoomController::class, 'addRoom']);
    Route::patch('update-room/{id}', [RoomController::class, 'updateRoom']);
    Route::delete('delete-room/{id}', [RoomController::class, 'deleteRoom']);
});
