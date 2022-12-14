<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\RegulatorController;
use App\Http\Controllers\Api\Admin\YPReaderController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/oknha', [RegulatorController::class,'oknha'] );

Route::get('yp/categories', [YPReaderController::class,'byCategories'] );
Route::get('yp/categories/items', [YPReaderController::class,'byCategoriesItems'] );