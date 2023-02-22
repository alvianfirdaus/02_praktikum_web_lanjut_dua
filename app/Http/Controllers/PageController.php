<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Seloamat Datang';
    }
    public function about(){
        echo '2141720022 Alvian Nur Firdaus';
    }
    public function articles($id){
        echo 'Halaman Artikel dengan Id ' .$id;
    }
}


