<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Muhammad Rhifa Zarkasih',
        'lahir'=>'Bandung, 10 Desember 2003',
        'hobi'=>'Belajar',
        'jk'=>'Laki-laki',
        'agama'=>'Islam',
        'alamat'=>'Komplek Permata Biru',
        'telp'=>'087796477699',
        'email'=>'m.rhifa@gmail.com',

    ];
    return view('biodata',$data);
});
Route::get('/list_siswa', [BiodataController::class, 'index'])->name('list_siswa');
Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add_siswa');
Route::post('/store_siswa', [BiodataController::class, 'store'])->name('store_siswa');
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy_siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show_bio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
