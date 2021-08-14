<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order_Item;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class IndexController extends Controller
{

    public function index()
    {
        $products = product::get();
        $orders = Order::get();
        $kategori = Category::get();
        $users =  User::where('level', 'USER')->get();
        $orders_item = Order_Item::get();


        return view('/admin/dashboard', compact('products', 'orders', 'users','orders_item','kategori'));
    }

    
}