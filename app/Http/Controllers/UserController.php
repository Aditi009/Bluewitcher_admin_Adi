<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('/admin.user');
    }

    public function edit()
    {
        return view('/admin.edituser');
    }
}
