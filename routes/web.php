<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;

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



Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('results',[HomeController::class, 'results'])->name('results');
Route::get('contact',[HomeController::class, 'contact'])->name('contact');
//Route::post('search-result',[HomeController::class, 'searchResult'])->name('search_result');
//Route::post('newsletter',[HomeController::class, 'saveNewsLetter'])->name('newsletter');
Route::get('blogs',[HomeController::class, 'blogs'])->name('blogs');
Route::get('blogDetail/{slug}',[HomeController::class, 'blogDetail'])->name('blog_detail');
Route::post('inquiry-submit',[HomeController::class, 'saveInquiry'])->name('inquiry_submit');
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap.xml');



require __DIR__.'/auth.php';

Route::get('admin/login', [AdminLoginController::class, 'adminIndexLogin'])->name('admin.index.login');
Route::post('admin/login', [AdminLoginController::class, 'AdminAttemptLogin'])->name('admin.attempt.login');
Route::post('password-reset-email',[HomeController::class, 'passwordReset'])->name('password.reset.email');





Route::prefix('admin')->name('admin.')->middleware(['admin','auth'])->namespace('Admin')->group(function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('update-profile', [AdminController::class, 'updateProfile'])->name('update.profile');
    Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('inquiries');
    Route::get('/inquiry-detail/{id?}', [AdminController::class, 'inquiriesDetail'])->name('inquiries.detail');
    Route::get('/inquiry-close/{id?}', [AdminController::class, 'inquiriesClose'])->name('inquiries.close');


    Route::name('blogs.')->group(function () {
        Route::get('blogs_add', [BlogController::class, 'add'])->name('add');
        Route::post('store_blogs/{id?}', [BlogController::class, 'store'])->name('store');
        Route::get('blogs_list', [BlogController::class, 'list'])->name('list');
        Route::get('edit_blog/{id?}', [BlogController::class, 'edit'])->name('edit');
        Route::get('delete_blog/{id?}', [BlogController::class, 'delete'])->name('delete');
        Route::get('blog_visibility/{id}/{visibility}', [BlogController::class, 'blog_visibility'])->name('change.visibility');
    });



    Route::get('/settings', [SettingController::class, 'index'])->name('setting.index');
    Route::get('setting/meta-tags', [SettingController::class, 'metaTags'])->name('setting.meta.tags');
    Route::post('settings/update', [SettingController::class, 'update'])->name('setting.update');
    Route::get('settings/home', [SettingController::class, 'home'])->name('setting.home');

});


