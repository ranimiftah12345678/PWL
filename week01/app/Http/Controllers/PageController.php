<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM: 244107020057 - Rani Miftah';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}