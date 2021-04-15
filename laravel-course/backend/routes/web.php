<?php

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
    return view('welcome');
});

Route::view('/faq', 'layouts.blocks.header.faq');

Route::view('/regulations', 'layouts.blocks.header.regulations');

Route::view('/mission', 'layouts.blocks.footer.mission');

Route::view('/personal-policy', 'layouts.blocks.footer.personalPolicy');

Route::view('/terms-use', 'layouts.blocks.footer.termsUse');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
