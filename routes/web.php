<?php

use App\Http\Controllers\Adri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Khairan_Nail;

use App\Http\Controllers\Arya_rachman;
use App\Http\Controllers\Adhella;
use App\Http\Controllers\Hana;
use App\Http\Controllers\Andy;


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
Route::get('/members/bagas', [Adri::class, 'index']);
Route::get('/members/Arya_rachman', [Arya_rachman::class, 'index']);
Route::get('members/adhella', [App\Http\Controllers\Adhella::class, 'index'])->name('Adhella.adhella');


Route::get('members/jeffry', [App\Http\Controllers\Jeffry::class, 'index'])->name('Jeffry.jeffry');

Route::get('members/habibi', [App\Http\Controllers\Habibi::class, 'index'])->name('Habibi.habibi');
Route::get('members/rizky', [App\Http\Controllers\Rizky_A::class, 'index'])->name('Rizky_A.rizky');
Route::get('/members/Andy', [Andy::class, 'index']);
Route::get('members/siti', [App\Http\Controllers\Siti::class, 'index'])->name('Siti.siti');
Route::get('members/hana', [App\Http\Controllers\Hana::class, 'hana'])->name('Hana.hana');

