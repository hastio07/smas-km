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

    public function formppdb()
    {
        return view('main.FormPpdb');
    }
    public function mainppdb()
    {
        return view('main.MainPpdb');
    }

    public function profil()
    {
        return view('main.Profil');
    }

    public function detailguru()
    {
        return view('main.DetailGuru');
    }
    public function newsdetails()
    {
        return view('main.NewsDetails');
    }
    public function teacherlist()
    {
        return view('main.TeacherList');
    }
}
