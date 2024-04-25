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

Route :: get('/about', function (){
    $nama = "Andika";
    $jenis_kelamin = "Pria";
    $pendidikan_terakhir = "SMP";
    $pekerjaan = "Belum tau";
    $alamat = "Bandung";
    return view('data_diri',compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route :: get('/biodata', function (){
    $nama_lengkap = "Andika Priadi";
    $jenis_kelamin = "Pria";
    $pendidikan_terakhir = "SMP";
    $alamat = "Rancamanyar Kab Bandung";
    return view('biodata',compact('nama_lengkap','jenis_kelamin','pendidikan_terakhir','alamat'));
});

//parameter
Route :: get('/bebas/{nama_lengkap}/{jenis_kelamin}/{pendidikan_terakhir}/{pekerjaan}/{alamat}', function (Request $request, $nama_lengkap ,$jenis_kelamin ,$pendidikan_terakhir ,$pekerjaan ,$alamat){
    $nama_lengkap2 = $nama_lengkap;
    $jenis_kelamin2 = $jenis_kelamin;
    $pendidikan_terakhir2 = $pendidikan_terakhir;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata2',compact('nama_lengkap2','jenis_kelamin2','pendidikan_terakhir2','pekerjaan2','alamat2'));
});
