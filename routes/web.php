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
Route::get('Faq',[\App\Http\Controllers\FaqController::class, 'FAQ'])->name('faq');
Route::get('Terms',[\App\Http\Controllers\TermController::class, 'Terms'])->name('terms');
Route::get('Cart',[\App\Http\Controllers\PrController::class, 'Cart'])->name('cart');
Route::get('Checkout',[\App\Http\Controllers\PrController::class, 'Billing'])->name('billing');
Route::get('Single',[\App\Http\Controllers\IndexController::class, 'Simple'])->name('simple');
Route::get('Register',[\App\Http\Controllers\RegController::class, 'Register'])->name('register');
Route::get('Login',[\App\Http\Controllers\RegController::class, 'Login'])->name('login');
