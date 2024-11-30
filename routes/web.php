<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('get.home');

Route::get('/login', function () {
    return view('login');
})->name('get.login');

Route::post('/login', [LoginController::class, 'login'])->name('post.login');

Route::get('/register', function () {
    return view('register');
})->name('get.register');

Route::post('/register', [LoginController::class, 'register'])->name('post.register');


Route::get('/food-details', function () {
    return view('foodInfo');
})->name('get.foodDetails');

Route::post('/logout', [LoginController::class, 'logout'])->name('user.Logout');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');


Route::get('/dashboard/menu', function () {
    return view('dashboard.menus');
})->name('get.menu')->middleware('auth');

Route::get('/dashboard/menu/addFood', function () {
    return view('dashboard.create.createFood');
})->name('dashboard.addFood')->middleware('auth');

Route::post('/dashboard/menu/addFood', [MenuController::class, 'storeMenu'])->name('post.dashboard')->middleware('auth');


Route::get('/dashboard/order', function () {
    return view('dashboard.orders');
})->name('get.order')->middleware('auth');


Route::get('/dashboard/category', function () {
    return view('dashboard.category');
})->name('get.category')->middleware('auth');


Route::post('/dashboard/category/createCategory', [CategoryController::class, 'delete'])->name('dashboard.delete.Category')->middleware('auth');

Route::get('/dashboard/category/createCategory', function () {
    return view('dashboard.create.createCategory');
})->name('dashboard.show.addCategory')->middleware('auth');


Route::post('/dashboard/category/createCategory', [CategoryController::class, 'storeCategory'])->name('dashboard.post.addCategory')->middleware('auth');
