<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactUsController;

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
    return view ('welcome');
});



Route::get('/contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'getContact']);

Route::post('/contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'save'])->name('contact-us');


Auth::routes();

Route::get('/contactsfetch', [App\Http\Controllers\Admin\ContactUsController::class, 'index'])->name('users.contactfetch');
Route::get('/contacted', [App\Http\Controllers\Admin\ContactUsController::class, 'showContact'])->name('users.contacted');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['admin'],'prefix'=>'admin'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users',App\Http\Controllers\Admin\UserController::class);
    // Route::get('usercontrol', [\App\Http\Controllers\UserController::class, 'index'])->name('usercontrol.view');
 });


