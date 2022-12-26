<?php

use App\Http\Controllers\JajalController;
use App\Http\Controllers\SiswaController;
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
//http://127.0.0.1:8000/ ==>view welcome
Route::get('/', function () {
    return view('welcome');
});
// http://127.0.0.1:8000/siswa ==> menampilkan "Saya Siswa"
// Route::get('/siswa', function () {
//     return "<h1>Saya Siswa</h1>";
// });
// http://127.0.0.1:8000/siswa/1 ==>menampikan saya siswa dengan ID 1 
// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>Saya Siswa denagan ID $id</h1>";
// })->where('id','[0-9]+');
// http://127.0.0.1:8000/siswa/1/tono ==>Saya siswa dengan ID 1 dan nama Tono
// Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//     return "<h1>Saya Siswa denagan ID $id dan nama $nama </h1>";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);
route::get('siswa',[SiswaController::class,'index']);
route::get('siswa/{id}',[SiswaController::class,'detail'])->where('id','[0-9]+');
route::get('jajal',[JajalController::class,'index']);
