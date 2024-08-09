<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        return view('welcome', [
            'title' => 'Selamat Datang'
        ]);
    }

    public function kontak() {
        return view('kontak', [
            'title' => 'Kontak Kami',
        ]);
    }

    public function visimisi() {
        return view('visimisi', [
            'title' => 'Visi & Misi',
        ]);
    }
}
