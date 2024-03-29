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
    public function newsdetails()
    {
        return view('main.NewsDetails');
    }
    public function teacherlist()
    {
        return view('main.TeacherList');
    }
    public function history()
    {
        return view('main.History');
    }
    public function orgstructure()
    {
        return view('main.OrgStructure');
    }
    public function visimisi()
    {
        return view('main.VisiMisi');
    }
    public function contact()
    {
        return view('main.Contact');
    }
    public function foto()
    {
        return view('main.Foto');
    }
}
