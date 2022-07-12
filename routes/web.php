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
Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('admin/main', 'adminMain')->name('adminlayout');
    Route::get('admin/visitUser', 'adminVisit')->name('adminvisit');
    Route::get('admin/addUser', 'addUser')->name('adduser');
    Route::get('admin/visitPerms', 'adminPerm')->name('permvisit');
    Route::get('admin/addPerm', 'adminAddPerm')->name('permadd');
    Route::get('admin/visitRoles', 'adminRoles')->name('visitrole');
    Route::get('admin/addRoles', 'adminAddRoles')->name('addrole');
    Route::get('admin/visitCategory', 'adminCategory')->name('visitcat');
    Route::get('admin/addCategory', 'adminAddCategory')->name('addcat');
    Route::get('admin/visitTag', 'adminVisitTag')->name('visittag');
    Route::get('admin/addTag', 'adminAddTag')->name('addtag');
    Route::get('admin/visitDiscount', 'adminDiscount')->name('visitdiscount');
    Route::get('admin/addDiscount', 'adminAddDiscount')->name('adddiscount');
    Route::get('admin/visitProduct', 'adminProducts')->name('visitproduct');
    Route::get('admin/addProduct', 'adminAddProducts')->name('addproduct');
    Route::get('admin/Comments', 'adminComment')->name('admincomment');
    Route::get('admin/visitProvince', 'adminVisitProvince')->name('adminprovince');
    Route::get('admin/addProvince', 'adminAddCity')->name('addprovince');
    Route::get('admin/visitCity', 'adminVisitCity')->name('admincity');
    Route::get('admin/addCity', 'adminAddCity')->name('addcity');
    Route::get('admin/Address', 'adminAddress')->name('adminaddress');
    Route::get('admin/Factors', 'adminFactors')->name('adminfactor');
    Route::get('admin/Transfers', 'adminTransfer')->name('admintransfer');
    Route::get('admin/Contact', 'adminContact')->name('admincontact');
});
                                // Admin Routes End \\
