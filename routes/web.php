<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\user\IndexController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\admin\RegionController;
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

//Route::get('/', function () {
//    return view('user/index');
//});
Route::get('/',[IndexController::class,'home']);
Route::get('/blog',[IndexController::class,'blog']);
Route::get('/blog/{slug}',[IndexController::class,'detail']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/contact-us',[IndexController::class,'contact']);
Route::post('/contact-save',[IndexController::class,'contactSave']);
Route::get('/post/{post:slug}',[IndexController::class,'listing'])->name('listing');
Route::get('/post/{cat:slug}/{post:title}',[IndexController::class,'detail'])->name('detail');
Route::get('/admin/category',[CategoryController::class,'index']);
Route::get('/admin/category/add',[CategoryController::class,'add']);
Route::post('/admin/category/save',[CategoryController::class,'save']);
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('/admin/category/update/{id}',[CategoryController::class,'update']);
//Route::get('/admin/post',[PostController::class,'index']);
Route::get('/admin/post',[PostController::class,'listing']);
Route::get('/admin/post/add',[PostController::class,'add']);
Route::get('/admin/post/add-post',[PostController::class,'addPost']);
Route::get('/admin/post/edit-post/{id}',[PostController::class,'editPost']);
Route::post('/admin/post/update-post/{id}',[PostController::class,'updatePost']);
Route::post('/admin/post/save-post',[PostController::class,'savePost']);
Route::get('/admin/region',[RegionController::class,'index']);
Route::get('/admin/region/edit/{id}/{title}',[RegionController::class,'edit']);
Route::post('/admin/region/save/{id}',[RegionController::class,'save']);

Route::post('/admin/post/get-country',[PostController::class,'getCountry'])->name('get-country');
Route::post('/admin/post/get-state',[PostController::class,'getState'])->name('get-state');
Route::post('/admin/post/get-city',[PostController::class,'getCity'])->name('get-city');


Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

