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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [App\Http\Controllers\FrontEndController::class , 'home'])->name('website');
Route::get('/about', [App\Http\Controllers\FrontEndController::class,'about'])->name('website.about');
Route::get('/category', [App\Http\Controllers\FrontEndController::class,'category'])->name('website.category');
Route::get('/contact', [App\Http\Controllers\FrontEndController::class,'contact'])->name('website.contact');
Route::get('/download', [App\Http\Controllers\FrontEndController::class,'download'])->name('website.download');
Route::get('/blog', [App\Http\Controllers\FrontEndController::class,'blog'])->name('website.blog');
Route::get('/post/{slug}', [App\Http\Controllers\FrontEndController::class,'post'])->name('website.post');
Route::post('/contact', [App\Http\Controllers\FrontEndController::class,'send_message'])->name('website.contact');




Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('tag', 'App\Http\Controllers\TagController');
    Route::resource('post', 'App\Http\Controllers\PostController');
    Route::resource('user', 'App\Http\Controllers\UserController');

    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [App\Http\Controllers\UserController::class, 'profile_update'])->name('user.profile.update');

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/show/{id}', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
    Route::delete('/contact/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');

});