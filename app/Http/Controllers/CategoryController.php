<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        return view('/admin.category');
    }

    public function add()
    {
        return view('/admin.addcategory');
    }

    public function edit()
    {
        return view('/admin.editcategory');
    }
}
