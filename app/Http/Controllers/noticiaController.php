<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class noticiaController extends Controller
{
    public function noticia(){
        return view('site.noticia');
    }
}
