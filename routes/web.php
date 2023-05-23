<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});
Route::get('/employee','EmployeeController@index');
Route::get('/student','StudentController@index');
Route::get('/add-post','PostController@addPost');
Route::post('/add-post','PostController@createPost')->name('post.add');
Route::get('/all-post','PostController@getPosts')->name('post.all');
Route::get('/delete-post/{id}','PostController@deletePost')->name('post.delete');
Route::get('/update-post','PostController@updatePost')->name('post.update');
Route::get('/edit-post/{id}','PostController@updateForm')->name('post.edit');
Route::get('/add-user','UserController@insertRecord');
Route::get('/get-phone','UserController@fetchPhoneByUser');
Route::get('/get-user','UserController@fetchUserByPhone');
