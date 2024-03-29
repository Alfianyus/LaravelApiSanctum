<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Feed\FeedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/feeds', [FeedController::class, 'index'])->middleware('auth:sanctum');
Route::post('/feed/store', [FeedController::class, 'store'])->middleware('auth:sanctum');
Route::post('/feed/like/{feed_id}', [FeedController::class, 'likePost'])->middleware('auth:sanctum');
Route::post('/feed/comment/{feed_id}', [FeedController::class, 'comment'])->middleware('auth:sanctum');
Route::get('/feed/comments/{feed_id}', [FeedController::class, 'getComments'])->middleware('auth:sanctum');

Route::post('/customer_information', [App\Http\Controllers\API\CustomerInformationController::class, 'customer_information']);
Route::post('/customer_address', [App\Http\Controllers\API\CustomerAddressController::class, 'customer_address']);
Route::post('/customer_job', [App\Http\Controllers\API\CustomerJobController::class, 'customer_job']);
Route::post('/customer_bank', [App\Http\Controllers\API\CustomerBankController::class, 'customer_bank']);
Route::post('/question', [App\Http\Controllers\API\QuestionController::class, 'question']);


Route::get('/customer_information', function(){
    return response([
        'message' => 'Api is working'
    ], 200);
});

Route::post('register', [AuthenticationController::class, 'register']);
Route::post('login', [AuthenticationController::class, 'login']);


