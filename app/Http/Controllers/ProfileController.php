<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view('actor.admin.AdminProfile');
    }
}