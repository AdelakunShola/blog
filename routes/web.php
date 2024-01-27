<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BlogPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;



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
    Route::get('/category/edit/{id}', 'EditCategory');
    Route::post('/update/category', 'UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');

});
  //End All Category routes




  //All blog post routes
Route::controller(BlogPostController::class)->group(function(){

    Route::get('/all/blog/post', 'AllBlogPost')->name('all.blog.post');
    Route::get('/add/blog/post', 'AddBlogPost')->name('add.blog.post');
    Route::post('/store/blog/post', 'StoreBlogPost')->name('store.blog.post');
    Route::get('/edit/blog/post/{id}', 'EditBlogPost')->name('edit.blog.post');
    Route::post('/update/blog/post', 'UpdateBlogPost')->name('update.blog.post');
    Route::get('/delete/blog/post/{id}', 'DeleteBlogPost')->name('delete.blog.post');
    

});
  //End All Category routes

});
//End Admin Gorup Middleware



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');




///frontend details url all route 
Route::controller(BlogPostController::class)->group(function(){

  Route::get('/blog/details/{slug}', 'BlogDetails');
  Route::get('/blog/category/list/{id}', 'categoryList');

  

});




///frontend details url all route 
Route::controller(CommentController::class)->group(function(){

  Route::post('/store/comment', 'StoreComment')->name('store.comment');

});





