<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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
Route::get('test',[\App\Http\Controllers\IndexController::class, 'Test']);

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
        //update routes\\
        Route::get('/updateUser/{id}', 'updateUser')->name('updateuser');
        Route::post('/updateUser/{id}', 'updateUser')->name('updateuserpost');
        Route::get('/updatePermission/{id}', 'updatePermission')->name('updateperm');
        Route::get('/updateCategory/{id}', 'updateCategory')->name('updatecat');
        Route::get('/updateTag/{id}', 'updateTag')->name('updatetag');
        Route::get('/updateDiscount/{id}', 'updateDiscount')->name('updatediscount');
        Route::get('/updateProduct/{id}', 'updateProduct')->name('updateproduct');
        Route::get('/updateComment/{id}', 'updateComment')->name('updatecomment');
        Route::get('/updateProvince/{id}', 'updateCity')->name('updateprovince');
        Route::get('/updateCity/{id}', 'updateCity')->name('updatecity');
        //delete routes\\
        Route::get('/deletedUser','deleteAccess')->name('deletepermission');
        Route::get('/deletedRole','deleteRole')->name('deleterole');
        Route::get('/deletedAddress','deleteAddress')->name('deleteaddress');

        //post routes\\
        Route::post('/addRoles', 'adminPostUser')->name('adminpostuser');



        });
    });


                                // Admin Routes End \\
