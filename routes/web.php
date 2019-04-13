<?php

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

Route::get("/post1", function(){
	$post = Cache::remember("post",60,function(){
		return "post";
	});
	echo $post;
	die;
});
//sau dấu @ là phương thức bạn sử dụng để gọi tới class Postcontroller function index
Route::get('post',"\App\Http\Controllers\PostController@index");
//function store dùng để lưu trữ dữ liệu. phương thức để POST dữ liệu khi CREATE ->lấy dữ liệu
Route::post("post", "\App\Http\Controllers\Postcontroller@store");

Route::get("/book", "\App\Http\Controllers\BookController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
