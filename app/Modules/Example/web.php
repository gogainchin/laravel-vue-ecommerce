<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/example',  [ExampleController::class, 'test']);

Route::prefix('example/api')->group(function () {
    Route::get('/test',  [ExampleController::class, 'test']);
});
