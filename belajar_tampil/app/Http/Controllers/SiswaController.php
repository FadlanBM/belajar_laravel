<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        // $data=siswa::all();
        $data=siswa::orderBy('nis','desc')->paginate(1);
        return view('halaman/index')->with('data',$data);
    }
    function detail($id){
        // return "<h1>saya adalah $id</h1>";
        $data=siswa::where('nis',$id)->first();
        return view('halaman/show')->with('data',$data);
    }
}
