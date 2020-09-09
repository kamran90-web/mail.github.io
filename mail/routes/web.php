<?php

use App\Item;
use App\User;
use App\Restaurant;
use App\Mail\WelcomeMail;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
   
    $users = DB::table('users')->where('user_type', 'Restaurant')->get();
    
    return view('welcome', compact('users'));
});
Route::get('restro/{id}', 'RestaurantController@edit')->name('items.edit');
Route::get('/customer', 'HomeController@create_customer')->name('customer');
Route::post('/customer', 'HomeController@store_customer')->name('customer.store');

Auth::routes();
Route::get('/index', function() {
    return view('Restaurant/index');
});

Route::get('/restro', 'RestaurantController@create_restro')->name('restro');
Route::post('/restro', 'RestaurantController@store_restro')->name('restro.store');

Route::get('index', 'RestaurantController@index')->middleware('auth');
Route::get("/create","RestaurantController@create")->middleware('auth');
Route::post("/create", "RestaurantController@store")->name('store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('items/{id}', 'RestaurantController@edit_order');
Route::post('items/store', 'RestaurantController@order_store')->name('order.store');
Route::get('orderlist', 'RestaurantController@orderlist');

