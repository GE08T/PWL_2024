<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 2341720054 <br> Nama : Galung Erlyan Tama';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID : '.$id;
    }
}
