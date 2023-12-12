<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuReviewController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [MenuController::class, 'index'])->name('home');
// Route::get('/home/menu', [MenuController::class, 'index']);

Route::get('/home/menu/{id}', [
    MenuController::class, 'specificMenu'
])->name('menu_each');

Route::post('/add-review', [
    MenuReviewController::class, 'reviewBaru'
]);