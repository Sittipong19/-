<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\ResearcherController;

use App\Http\Controllers\PostController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');
Route::get('chartjs2', [ChartJsController::class, 'index2']);

Route::get("/add-post",[PostController::class,'addPost'])->name('post.add');
Route::post("/add-post",[PostController::class,'savePost'])->name('save.post');
Route::get("/post-list",[PostController::class,'postList'])->name('post.list');
Route::get("/edit-post/{id}",[PostController::class,'editPost'])->name('post.edit');
Route::get("/delete-post/{id}",[PostController::class,'deletePost'])->name('post.delete');

Route::post("/update-post",[PostController::class,'updatePost'])->name('update.post');