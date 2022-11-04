<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Khairan_Nail;

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

//buat route di sini
Route::get('members/nail', [App\Http\Controllers\Khairan_Nail::class, 'index'])->name('Khairan_nail.nail');
Route::get('members/sheyla', [App\Http\Controllers\Sheyla::class, 'index'])->name('Sheyla.sheyla');
Route::get('members/siti', [App\Http\Controllers\Siti::class, 'index'])->name('Siti.siti');


