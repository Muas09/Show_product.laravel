<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mas', [App\Http\Controllers\PageController::class, 'getIndex']);
Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);

Route::get('/type/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);

Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [App\Http\Controllers\PageController::class, 'postAdminEdit']);


Route::post('/admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete'])->name('delete-product');


Route::post('/admin-export', [App\Http\Controllers\PageController::class, 'exportAdminProduct'])->name('export');
Route::post('/luan11/{id}', [PageController::class, 'postAdminDelete']);

Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register', [UserController::class, 'Register']);

Route::get('/login', function () {
    return view('users.login');
});
Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout']);



Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');

Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');

Route::get('check-out', [PageController::class, 'getCheckout'])->name('dathang');
Route::post('check-out', [PageController::class, 'postCheckout'])->name('dathang');



Route::get('/mua4', [PageController::class, 'marter']);


Route::get('/mua5', [PageController::class, 'if']);

Route::get('/mualuan6', [PageController::class, 'for']);

Route::get('/mua7', [PageController::class, 'lienhe']);

Route::get('/mua8', [PageController::class, 'about']);


Route::get('/products', [ProductController::class, 'index'])->name('products.index');



Route::get('/tinhtich/{a}/{b}', function ($a, $b) {
    echo $a * $b;
    exit;
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a, $b) {
    echo $a + $b;
    exit;
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a, $b) {
    echo $a - $b;
    exit;
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a, $b) {
    echo $a / $b;
    exit;
})->whereNumber('a')->whereNumber('b');