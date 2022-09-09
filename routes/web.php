<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;

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

Route::get('/', function () {
    return view('frontend.home');
});


require __DIR__.'/auth.php';








//Route::prefix('admin')->name('admin.')->middleware(['admin','auth'])->namespace('Admin')->group(function(){
//
//    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
//    Route::get('/profile', 'AdminController@profile')->name('profile');
//    Route::get('/inquiries', 'AdminController@inquiries')->name('inquiries');
//    Route::get('/inquiry-detail/{id?}', 'AdminController@inquiriesDetail')->name('inquiries.detail');
//    Route::get('/inquiry-close/{id?}', 'AdminController@inquiriesClose')->name('inquiries.close');
//
//
//    Route::name('blogs.')->group(function () {
//        Route::get('blogs_add', 'BlogController@add')->name('add');
//        Route::post('store_blogs/{id?}', 'BlogController@store')->name('store');
//        Route::get('blogs_list', 'BlogController@list')->name('list');
//        Route::get('edit_blog/{id?}', 'BlogController@edit')->name('edit');
//        Route::get('delete_blog/{id?}', 'BlogController@delete')->name('delete');
//        Route::get('blog_visibility/{id}/{visibility}', 'BlogController@blog_visibility')->name('change.visibility');
//    });
//
//
//
//    Route::get('/settings', 'SettingController@index')->name('setting.index');
//    Route::get('setting/meta-tags', 'SettingController@metaTags')->name('setting.meta.tags');
//    Route::post('settings/update', 'SettingController@update')->name('setting.update');
//
//});
//

