<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;



//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [UserController::class, 'Index']);

Route::get('/dashboard', function () {
    return view('frontend.dashboard.user_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
    Route::post('/profile/store', [UserController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/profile/logout', [UserController::class, 'ProfileLogout'])->name('user.profile.logout');
    Route::get('/user/password/change', [UserController::class, 'UserChangePassword'])->name('user.password.change');
    Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
    
});

require __DIR__.'/auth.php';

//Admin Gorup Middleware
Route::middleware(['auth','roles:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

});
//End Admin Gorup Middleware


Route::middleware(['auth','roles:admin'])->group(function(){


    //All Category routes
Route::controller(CategoryController::class)->group(function(){

    Route::get('/all/category', 'AllCategory')->name('all.category');
    Route::post('/category/store', 'StoreCategory')->name('category.store');

});
  //End All Category routes

});
//End Admin Gorup Middleware



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');





