<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ChatController;
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
Route::get('/home', function(){
    return view('home');
});

Route::resource('products', App\Http\Controllers\ProductsController::class);
Route::resource('sellers', App\Http\Controllers\SellerController::class);
Route::resource('supplers', App\Http\Controllers\SupplerController::class);
Route::resource('transports', App\Http\Controllers\TransportController::class);
Route::resource('warehouses', App\Http\Controllers\WarehoseController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);


Route::view('/', 'home'); 
Route::get('/hotels', 'HotelController@index'); 
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name('auth0-callback');
Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', 'ReservationController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
});

Route::get('/chat', [ChatController::class,'index'])->name('chat');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');

use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();
 
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
});

use App\Http\Controllers\Auth\SocialLoginController;

Route::get('social-auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('social-auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');
