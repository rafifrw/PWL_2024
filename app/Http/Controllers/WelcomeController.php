<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Rafif')
        ->with('occupation','Astronaut');
        }
       

    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nim: 2241760111 | Nama: Rafif Ramadhani Wibowo';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}