<?php

use App\Http\Controllers\APIGetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// laravel new example-app
// cd example-app
// php artisan serve
// php artisan make:controller APIGetController

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/get", [APIGetController::class, '_apiGet']);
