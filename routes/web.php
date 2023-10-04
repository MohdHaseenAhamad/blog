<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
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
    return view('admin/index');
});
Route::get('/admin/category',[CategoryController::class,'index']);
Route::get('/admin/category/add',[CategoryController::class,'add']);
Route::post('/admin/category/save',[CategoryController::class,'save']);
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('/admin/category/update/{id}',[CategoryController::class,'update']);
Route::get('/admin/post',[PostController::class,'index']);
Route::get('/admin/post/listing/{id}',[PostController::class,'listing']);
Route::get('/admin/post/add-post/{id}',[PostController::class,'addPost']);
Route::get('/admin/post/edit-post/{id}',[PostController::class,'editPost']);
Route::post('/admin/post/update-post/{id}',[PostController::class,'updatePost']);
Route::post('/admin/post/save-post',[PostController::class,'savePost']);


