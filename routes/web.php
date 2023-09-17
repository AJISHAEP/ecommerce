<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'welcome'])->name('welcome');
// ->name('dash');
Route::get('/new/{id}', [AuthManager::class, 'new'])->name('new');
Route::get('/signin', [AuthManager::class, 'signin'])->name('signin');
Route::post('/signin',[AuthManager::class,'signinPost'])->name('signin.post');
Route::get('/signup',[AuthManager::class,'signup'])->name('signup');
Route::post('/signup',[AuthManager::class,'signupPost'])->name('signup.post');
Route::get('/signout', [AuthManager::class, 'signout'])->name('signout');
// Route::get('/welcome', [AuthManager::class, 'welcome'])->name('welcome');
Route::get('/profile', [AuthManager::class, 'profile'])->middleware('auth')->name('profile');
Route::post('profile/update', [AuthManager::class, 'update'])->name('profile.update');
Route::post('address/update', [AuthManager::class, 'addressupdate'])->name('address.update');
Route::get('add', [AuthManager::class, 'add'])->name('add');
Route::get('address', [AuthManager::class, 'address'])->name('address');
Route::get('edits/{id}', [AuthManager::class, 'edits'])->name('edits');
Route::post('address/edits', [AuthManager::class, 'addressedits'])->name('address.edits');
Route::post('cart', [CartController::class, 'cart'])->name('cart');
Route::get('cartlist', [CartController::class, 'cartlist'])->name('cartlist');

// Route::post('/account', [AuthManager::class, 'accountPost'])->name('account.post');
// Route::get('/addaddress', [AuthManager::class, 'addaddress'])->name('addaddress');


