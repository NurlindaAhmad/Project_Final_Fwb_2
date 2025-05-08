<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home()
    {
        return view('HalamanUtama.home');
    }
    public function about()
    {
        return view('HalamanUtama.about');
    }
    public function contact()
    {
        return view('HalamanUtama.contact');
    }
    public function services()
    {
        return view('HalamanUtama.services');
    }
    public function gallery()
    {
        return view('HalamanUtama.gallery');
    }
    

}
