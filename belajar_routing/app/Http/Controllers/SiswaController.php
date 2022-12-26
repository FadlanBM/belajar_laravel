<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        return "<h1>Saya siswa dari controler index</h1>";
    }
    function detail($id){
        return "<h1>Saya siswa berasal dari controller detail id $id </h1>";
    }
}
