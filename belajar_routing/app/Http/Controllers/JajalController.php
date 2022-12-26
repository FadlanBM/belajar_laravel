<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\at;

class JajalController extends Controller
{
    function index(){
        return '<h1>Hallo saya index</h1>';
    }
    
}
