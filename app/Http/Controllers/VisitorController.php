<?php

namespace App\Http\Controllers;

class VisitorController extends Controller
{
    public function index()
    {
        return view('/admin.visitor');
    }
}
