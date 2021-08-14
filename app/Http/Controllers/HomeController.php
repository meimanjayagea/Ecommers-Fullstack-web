<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $lastProducts = Product::paginate(6);
        return view('website/index', compact('products','lastProducts'));
        
    }



}
