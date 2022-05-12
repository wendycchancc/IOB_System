<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
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
    return view('index');
});

Route::get('locale', function () {
    return \App::getLocale();
});

// Put the selected locale to the session
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::resource('itemcategory', 'itemcategoryController');
Route::resource('items', 'itemsController');
Route::resource('user', 'userController');
Route::resource('shop', 'shopController');
Route::resource('cart', 'cartController');