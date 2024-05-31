<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


// frontend pages 
Route::get('/', 'PageController@index')->name('home');
Route::get('/posts', 'PageController@posts')->name('posts');
Route::get('/posts/{post}', 'PageController@showPost')->name('posts.view');
Route::get('/category/{category}', 'PageController@showCategory')->name('categories.view');
Route::get('/about', 'PageController@aboutUs')->name('about.view');
Route::get('/contact', 'PageController@contactUs')->name('contact.view');
Route::get('/service/{slug}', 'PageController@service')->name('service.view');
Route::get('/project/{slug}', 'PageController@project')->name('project.view');
Route::get('/gallery', 'PageController@gallery')->name('gallery.view');
Route::post('/contactus', 'PageController@contactUsForm')->name('contact.form');
Route::get('/reload-captcha', 'PageController@reloadCaptcha');
// Route::get('/reload-captcha', [HomeController::class, 'reloadCaptcha']);
// admin pages 
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController')->except('show');

    // Setting
Route::prefix('setting')->group(function () {
    Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
    Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
    // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');
});

// Services
Route::prefix('services')->group(function () {
    Route::get('/', 'ServiceController@index')->name('services.index');
    Route::get('/create', 'ServiceController@create')->name('services.create');
    Route::post('/store', 'ServiceController@store')->name('services.store');
    Route::get('/delete/{id}', 'ServiceController@delete')->name('service.delete');
    Route::get('/{id}', 'ServiceController@edit')->name('service.edit');
    Route::post('/update/{id}', 'ServiceController@update')->name('service.update');
});

// Projects
Route::prefix('project')->group(function () {
    Route::get('/', 'ProjectController@index')->name('project.index');
    Route::get('/create', 'ProjectController@create')->name('project.create');
    Route::post('/store', 'ProjectController@store')->name('project.store');
    Route::post('/project/update/{id}', 'ProjectController@update')->name('project.update');
    Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
    Route::get('/project/view/{id}', 'ProjectController@projectView')->name('project.view');
    Route::get('/project/delete/{id}', 'ProjectController@projectDelete')->name('project.gallery.delete');

    // Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
    // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');
});


});


