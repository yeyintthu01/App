<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Item;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'show']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'post_login']);


Route::get('/show', function () {
    return view('item.show', [
        'items'=>Item::paginate(10)
    ]);
});

Route::get('/create', [ItemController::class, 'show']);
Route::post('/create', [ItemController::class, 'store']);


Route::get('/category', function () {
    return view('category.show', [
        'items' => Item::paginate(10)
    ]);
});

Route::get('/add', function () {
    return view('category.add');
});


