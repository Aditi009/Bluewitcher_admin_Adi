<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order=Order::all();
        return view('admin.order',compact('order'));
    }

    public function add()
    {
        return view('admin.addorder');
    }

    public function edit(Request $req)
    {
        $order=Order::where('id',$req->id)->first();
        return view('admin.editorder',compact('order'));
    }
    public function addorder(Request $req)
    {
        $order=new Order();
        $order->productName=$req->product_name;
        $order->autherId=$req->author_id;
        $order->autherName=$req->author_name;
        $order->soldPrice=$req->sold_price;
        $order->productPrice=$req->product_price;
        $order->currency=$req->currency;
        $order->date=$req->date;
        $order->customerId=$req->customer_id;
        $order->customerPhone=$req->customer_mobile;
        $order->phone=$req->phone;
        $order->customerSkype=$req->customer_skype;
        $order->customerEmail=$req->customer_email;
        $order->save();
return redirect('order');



    }
    public function editmyorder(Request $req)
    {
        $order=Order::where('id',$req->id)->first();


        $order->autherId=$req->author_id;
        $order->autherName=$req->author_name;
        $order->soldPrice=$req->sold_price;
        $order->productPrice=$req->product_price;
        $order->currency=$req->currency;
        $order->date=$req->date;
        $order->customerId=$req->customer_id;
        $order->customerPhone=$req->customer_mobile;
        $order->phone=$req->phone;
        $order->customerSkype=$req->customer_skype;
        $order->customerEmail=$req->customer_email;
        $q=$order->update();
        if($q)
        {
            return redirect('order')->with('msg',"Successfully Edited");

        }

    }
    public function deleteorder(Request $req)
    {
        $order=Order::find($req->id);
        $order->delete();
        return redirect()->back()->with('msg',"Successfully deleted");
    }

}
