<?php

namespace App\Http\Controllers;

class TeacherController extends Controller
{
    public function index()
    {
        return view('actor.admin.AdminTeacher');
    }
}
