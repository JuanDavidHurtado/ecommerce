<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CLogin;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




//Autenticacion via gmail
Route::get('/redirect', [CLogin::class, 'redirect'])->name('redirect');
Route::get('/callback', [CLogin::class, 'callback'])->name('callback');

//Autenticacion via facebook
Route::get('/redirect-facebook', [CLogin::class, 'redirectFacebook'])->name('redirect-facebook');
Route::get('/callback-facebook', [CLogin::class, 'callbackFacebook'])->name('callback-facebook');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
