<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }
    function tentang(){
        return view("halaman/tentang");
    }function kontak(){
        $data=[
            'judul'=>'ini adalah kontak',
            'profil'=>[
                'email'=>'fadlan@gmail.com',
                'ig'=>'embuh'
            ]
            ];
            return view("halaman/kontak")->with($data);
    }
}
