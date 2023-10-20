<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class, 'index']);

Route::get('contact', [ContactController::class, 'index']);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
Route::get('admin/admin_contact', [ContactController::class, 'show']);
Route::get('admin/contact/{id}/delete', [ContactController::class, 'destroy']);

Route::get('vehicle/{id}', [ProductController::class, 'vehicle']);


Route::get('admin/admin_product', [ProductController::class, 'index']); // Hiển thị danh sách
Route::get('admin/admin_insert', [ProductController::class, 'create']); // Thêm mới
Route::post('admin/admin_insert', [ProductController::class, 'store']); // Xử lý thêm mới
Route::get('admin/{id}/edit', [ProductController::class, 'edit']); // Sửa
Route::post('admin/admin_edit', [ProductController::class, 'update']); // Xử lý sửa
Route::get('admin/{id}/delete', [ProductController::class, 'destroy']); // Xóa
