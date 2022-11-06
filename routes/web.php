<?php

use App\Http\Controllers\Adri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Khairan_Nail;
use App\Http\Controllers\Naillah;
use App\Http\Controllers\Arya_rachman;
use App\Http\Controllers\Adhella;
use App\Http\Controllers\Hana;
use App\Http\Controllers\Andy;
use App\Http\Controllers\Samuel;
use App\Http\Controllers\Irsyaad;
use App\Http\Controllers\Aryo;
use App\Http\Controllers\M_kautsar;
use App\Http\Controllers\Winny;
use App\Http\Controllers\Jeffry;
use App\Http\Controllers\Agung;
use App\Http\Controllers\Selvi;
use App\Http\Controllers\Sayiddina_Farhan;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!`
|
*/

Route::get('/', function () {
    return view('welcome');
});



//buat route di sini
Route::get('members/sheyla', [App\Http\Controllers\Sheyla::class, 'index'])->name('Sheyla.sheyla');
Route::get('members/irsyaad', [App\Http\Controllers\Irsyaad::class, 'index'])->name('Irsyaad.ichad');
Route::get('/members/bagas', [Adri::class, 'index']);
Route::get('/members/Arya_rachman', [Arya_rachman::class, 'index']);
Route::get('members/kevin', [App\Http\Controllers\Kevin::class, 'index'])->name('kevin.kevin');
Route::get('members/farhan', [App\Http\Controllers\Sayiddina_Farhan::class, 'index'])->name('Sayiddina_Farhan.farhan');
Route::get('members/jeffry', [App\Http\Controllers\Jeffry::class, 'index'])->name('Jeffry.jeffry');
Route::get('members/nail', [App\Http\Controllers\Khairan_Nail::class, 'index'])->name('Khairan_nail.nail');
Route::get('members/adhella', [App\Http\Controllers\Adhella::class, 'index'])->name('Adhella.adhella');
Route::get('members/hana', [App\Http\Controllers\Hana::class, 'hana'])->name('Hana.hana');
Route::get('members/RasKit', [App\Http\Controllers\Rasya::class, 'index'])->name('Rasya.rasya');
Route::get('members/habibi', [App\Http\Controllers\Habibi::class, 'index'])->name('Habibi.habibi');
Route::get('members/rizky', [App\Http\Controllers\Rizky_A::class, 'index'])->name('Rizky_A.rizky');
Route::get('/members/Andy', [Andy::class, 'index']);
Route::get('/members/aryo', [Aryo::class, 'index']);
Route::get('members/siti', [App\Http\Controllers\Siti::class, 'index'])->name('Siti.siti');
Route::get('members/deren', [App\Http\Controllers\Arya_daren::class, 'index'])->name('Arya_daren.deren');
Route::get('members/varel', [App\Http\Controllers\Varel::class, 'index'])->name('Varel.varel');
Route::get('members/bagus', [App\Http\Controllers\Bagus::class, 'index'])->name('Bagus.bagus');
Route::get('members/samuel', [App\Http\Controllers\Samuel::class, 'index'])->name('Samuel.samuel');
Route::get('members/winny', [App\Http\Controllers\Winny::class, 'index'])->name('Winny.winny');
Route::get('members/agung', [App\Http\Controllers\Agung::class, 'index'])->name('Agung.agung');
Route::get('members/Sulthan', [App\Http\Controllers\Sulthan::class, 'index'])->name('Sulthan.Sulthan');
Route::get('members/M_kautsar', [App\Http\Controllers\M_kautsar::class, 'index'])->name('M_kautsar.M_kautsar');
Route::get('members/l', [App\Http\Controllers\Fahry::class, 'index'])->name('Fachry.index');
Route::get('members/yudiya', [App\Http\Controllers\M_yudiya::class, 'index']);
Route::get('members/naillah', [App\Http\Controllers\Naillah::class, 'naillah'])->name('Naillah.naillah');
Route::get('members/selvi', [App\Http\Controllers\Selvi::class, 'index'])->name('Selvi.selvi');
Route::get('members/radit', [App\Http\Controllers\Raditya::class, 'index'])->name('Raditya.radit');
Route::get('members/miftah', [App\Http\Controllers\Ahmad_miftah::class, 'index'])->name('Ahmad_Miftah.miftah');

Route::get('members/dimas', [App\Http\Controllers\Dimas::class, 'index'])->name('Dimas.dimas');

Route::get('members/rei', [App\Http\Controllers\Rei::class, 'index'])->name('Rei.rei');

