<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function home()
    {
        return view('main.Home');
    }

    public function sambutan()
    {
        return view('main.Sambutan');
    }

    public function ppdb()
    {
        return view('main.PPDB');
    }

    public function profil()
    {
        return view('main.Profil');
    }

    public function detailguru()
    {
        return view('main.DetailGuru');
    }
}
