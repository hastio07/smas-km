<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminVisiMisiController extends Controller
{
    public function index()
    {
        return view('actor.admin.AdminVisiMisi');
    }
}
