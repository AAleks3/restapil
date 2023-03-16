<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['namespace' => 'Note', 'prefix' => 'v1'], function() {
    Route::get('/notebook/', 'NotesController');
    Route::post('/notebook/', 'CreateController');
    Route::get('/notebook/{id}/', 'ShowController');
    Route::post('/notebook/{id}', 'UpdateController');
    Route::delete('/notebook/{id}', 'DeleteController');
});
