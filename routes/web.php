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
Route::get('admin/visitPerms',[\App\Http\Controllers\AdminController::class, 'adminPerm'])->name('permvisit');
Route::get('admin/addPerm',[\App\Http\Controllers\AdminController::class, 'adminAddPerm'])->name('permadd');
Route::get('admin/visitRoles',[\App\Http\Controllers\AdminController::class, 'adminRoles'])->name('visitrole');
Route::get('admin/addRoles',[\App\Http\Controllers\AdminController::class, 'adminAddRoles'])->name('addrole');
Route::get('admin/visitCategory',[\App\Http\Controllers\AdminController::class, 'adminCategory'])->name('visitcat');
Route::get('admin/addCategory',[\App\Http\Controllers\AdminController::class, 'adminAddCategory'])->name('addcat');
Route::get('admin/visitTag',[\App\Http\Controllers\AdminController::class, 'adminVisitTag'])->name('visittag');
Route::get('admin/addTag',[\App\Http\Controllers\AdminController::class, 'adminAddTag'])->name('addtag');
Route::get('admin/visitDiscount',[\App\Http\Controllers\AdminController::class, 'adminDiscount'])->name('visitdiscount');
Route::get('admin/addDiscount',[\App\Http\Controllers\AdminController::class, 'adminAddDiscount'])->name('adddiscount');
Route::get('admin/visitProduct',[\App\Http\Controllers\AdminController::class, 'adminProducts'])->name('visitproduct');
Route::get('admin/addProduct',[\App\Http\Controllers\AdminController::class, 'adminAddProducts'])->name('addproduct');
Route::get('admin/Comments',[\App\Http\Controllers\AdminController::class, 'adminComment'])->name('admincomment');
Route::get('admin/visitProvince',[\App\Http\Controllers\AdminController::class, 'adminVisitProvince'])->name('adminprovince');
Route::get('admin/addProvince',[\App\Http\Controllers\AdminController::class, 'adminAddCity'])->name('addprovince');
Route::get('admin/visitCity',[\App\Http\Controllers\AdminController::class, 'adminVisitCity'])->name('admincity');
Route::get('admin/addCity',[\App\Http\Controllers\AdminController::class, 'adminAddCity'])->name('addcity');
Route::get('admin/Address',[\App\Http\Controllers\AdminController::class, 'adminAddress'])->name('adminaddress');
Route::get('admin/Factors',[\App\Http\Controllers\AdminController::class, 'adminFactors'])->name('adminfactor');
Route::get('admin/Transfers',[\App\Http\Controllers\AdminController::class, 'adminTransfer'])->name('admintransfer');
Route::get('admin/Contact',[\App\Http\Controllers\AdminController::class, 'adminContact'])->name('admincontact');
