<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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

Route::get('',[IndexController::class, 'index'])->name('Index');
Route::get('contact',[IndexController::class, 'contact'])->name('contacts');
Route::get('faq',[\App\Http\Controllers\FaqController::class, 'FAQ'])->name('faq');
Route::get('terms',[\App\Http\Controllers\TermController::class, 'Terms'])->name('terms');
Route::get('cart',[\App\Http\Controllers\PrController::class, 'Cart'])->name('cart');
Route::get('checkout',[\App\Http\Controllers\PrController::class, 'Billing'])->name('billing');
Route::get('single',[\App\Http\Controllers\IndexController::class, 'Simple'])->name('simple');
Route::get('register',[\App\Http\Controllers\RegController::class, 'Register'])->name('register');
Route::get('login',[\App\Http\Controllers\RegController::class, 'Login'])->name('login');
Route::get('maleProducts',[\App\Http\Controllers\CategoryController::class, 'maleproducts'])->name('malep');
Route::get('femaleProducts',[\App\Http\Controllers\CategoryController::class, 'femaleproducts'])->name('femalep');
                                // Admin Routes \\
Route::get('admin/main',[\App\Http\Controllers\AdminController::class, 'adminMain'])->name('adminlayout');
Route::get('admin/visitUser',[\App\Http\Controllers\AdminController::class, 'adminVisit'])->name('adminvisit');
Route::get('admin/addUser',[\App\Http\Controllers\AdminController::class, 'addUser'])->name('adduser');
