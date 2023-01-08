<?php

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('Login');
});

Route::get('/registrasi', function () {
    return view('Register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/edit_service_page/{id}', function ($id) {
    $data = DB::table('services')->where('id', $id)->first();
    return view('edit_service', ['data' => $data]);
});



Route::get('/product_add', function () {
    return view('product_add');
});

Route::get('/service_add', function () {
    return view('add_service');
});

Route::get('/product_edit_page/{id}', function ($id) {
    $data = DB::table('products')->where('id', $id)->first();
    return view('product_edit', ['data' => $data]);
});

Route::get('/service', function () {
    $data = DB::table('services')->get();
    return view('service', ['data' => $data]);
});

Route::get('/product', function () {
    $data = DB::table('products')->get();
    return view('product', ['data' => $data]);
});

Route::get('/product_detail/{id}', function ($id) {
    $data = DB::table('products')->where('id', $id)->first();
    return view('product_detail', ['data' => $data]);
});



Route::get('/profile', function () {
    $data = User::find(Auth::user()->id);
    return view('profile', ['data' => $data]);
});

Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/product_add', [ProductController::class, 'store']);
Route::put('/product_edit/{id}', [ProductController::class, 'update']);
Route::get('/product_delete/{id}', [ProductController::class, 'destroy']);
Route::post('/service_add', [ServiceController::class, 'store']);
Route::put('/service_edit/{id}', [ServiceController::class, 'update']);
Route::get('/service_delete/{id}', [ServiceController::class, 'destroy']);
Route::put('/profile', [UserController::class, 'update']);
