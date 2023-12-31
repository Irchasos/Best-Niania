<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\MainPageController::class, 'index'])->name('home');
Route::get('/version', [App\Http\Controllers\MainPageController::class, 'version'])->name('version');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/list', [App\Http\Controllers\SearchController::class, 'list'])->name('list');
Route::get('/guardian/{id}', [SearchController::class, 'show']);

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');;
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::post('/updateDistrictStatus', [CustomAuthController::class, 'updateDistrictStatus'])->name('updateDistrictStatus');
Route::post('/updateOptionStatus', [CustomAuthController::class, 'updateOptionStatus'])->name('updateOptionStatus');

