<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UniController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\PeriodController;
use App\Http\Controllers\Api\SystemController;
use App\Http\Controllers\Api\UploadController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\TourController;
use App\Http\Controllers\Api\SizeController;

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

Route::post('logout', [AuthController::class, 'logout']);
Route::get('unilist', [UniController::class, 'unilist']);
Route::post('regis', [MemberController::class, 'regis']);
Route::get('memlist', [MemberController::class, 'memlist']);
Route::post('search', [SearchController::class, 'search']);
Route::get('getSystem', [SystemController::class, 'getSystem']);
Route::get('getMember/{id}', [MemberController::class, 'getMember']);
Route::get('getPeriod', [PeriodController::class, 'getPeriod']);
Route::post('upload', [UploadController::class, 'upload']);
Route::post('storePayment', [PaymentController::class, 'storePayment']);
Route::get('getTour', [TourController::class, 'getTour']);
Route::get('showTour/{id}', [TourController::class, 'showTour']);
Route::get('getSize', [SizeController::class, 'getSize']);
Route::get('getSum', [MemberController::class, 'getSum']);

Route::middleware('guest')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', UserController::class);
    Route::resource('period', PeriodController::class);
    Route::resource('system', SystemController::class);
    Route::resource('member', MemberController::class);
    Route::resource('payment', PaymentController::class);
});
