<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [AdminController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin_home');

    Route::get('/category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin_category_store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin_category_destroy');

    Route::get('/post', [PostController::class, 'index'])->name('admin_post');
    Route::get('/post/create', [PostController::class, 'create'])->name('admin_post_create');
    Route::post('/post/store', [PostController::class, 'store'])->name('admin_post_store');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('admin_post_edit');
    Route::post('/post/update/{id}', [PostController::class, 'update'])->name('admin_post_update');
    Route::get('/post/destroy/{id}', [PostController::class, 'destroy'])->name('admin_post_destroy');

    Route::get('/setting', [SettingController::class, 'index'])->name('admin_setting');

    Route::post('/setting/update/{id}', [SettingController::class, 'update'])->name('admin_setting_update');
    ;

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
