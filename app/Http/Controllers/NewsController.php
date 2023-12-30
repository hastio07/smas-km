<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return view('actor.admin.AdminNews');
    }
}
