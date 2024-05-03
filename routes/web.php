<?php
use App\Models\Siswa;
use App\Models\Film;

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

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Rafi faizul";
    $jk = "laki-laki";
    $pt = "SMK";
    $pe = "Mahasiswa";
    return view('biodata', compact('nama','jk','pt','pe'));
});

Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});
Route::get('siswa', function () {
    return view('siswa');
});
Route::get('sakola', function () {
    return view('siswa');
});

Route::get('album', function () {
    return view('AlbumMusik');
});

Route::get('film', function () {
    return view('film');
});

Route::get('film/{id}', function(int $id) {
    return view('detail-film', ['film' => Film::findorfail($id)]); 
});





