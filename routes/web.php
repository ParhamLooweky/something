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
    Route::prefix('admin')->group(function () {
        Route::get('/main', 'adminMain')->name('adminlayout');
        Route::get('/visitUser', 'adminVisit')->name('adminvisit');
        Route::get('/addUser', 'addUser')->name('adduser');
        Route::get('/visitPerms', 'adminPerm')->name('permvisit');
        Route::get('/addPerm', 'adminAddPerm')->name('permadd');
        Route::get('/visitRoles', 'adminRoles')->name('visitrole');
        Route::get('/addRoles', 'adminAddRoles')->name('addrole');
        Route::get('/visitCategory', 'adminCategory')->name('visitcat');
        Route::get('/addCategory', 'adminAddCategory')->name('addcat');
        Route::get('/visitTag', 'adminVisitTag')->name('visittag');
        Route::get('/addTag', 'adminAddTag')->name('addtag');
        Route::get('/visitDiscount', 'adminDiscount')->name('visitdiscount');
        Route::get('/addDiscount', 'adminAddDiscount')->name('adddiscount');
        Route::get('/visitProduct', 'adminProducts')->name('visitproduct');
        Route::get('/addProduct', 'adminAddProducts')->name('addproduct');
        Route::get('/Comments', 'adminComment')->name('admincomment');
        Route::get('/visitProvince', 'adminVisitProvince')->name('adminprovince');
        Route::get('/addProvince', 'adminAddCity')->name('addprovince');
        Route::get('/visitCity', 'adminVisitCity')->name('admincity');
        Route::get('/addCity', 'adminAddCity')->name('addcity');
        Route::get('/Address', 'adminAddress')->name('adminaddress');
        Route::get('/Factors', 'adminFactors')->name('adminfactor');
        Route::get('/Transfers', 'adminTransfer')->name('admintransfer');
        Route::get('/Contact', 'adminContact')->name('admincontact');

        });
    });


                                // Admin Routes End \\
