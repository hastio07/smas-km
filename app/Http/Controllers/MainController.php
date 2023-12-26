<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function sambutan()
    {
        return view('Sambutan');
    }

    public function ppdb()
    {
        return view('PPDB');
    }

    public function profil()
    {
        return view('Profil');
    }
}
