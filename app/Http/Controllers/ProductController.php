<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('/admin.product');
    }

    public function view()
    {
        return view('/admin.viewproduct');
    }

    public function add()
    {
        return view('/admin.addproduct');
    }

    public function edit()
    {
        return view('/admin.editproduct');
    }

    public function addProduct(Request $request)
    {
        $data = $request->All();
        print_r($data);
    }
}
