<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        
        return view('index', compact('products'));
    }

    public function order(Request $request, $id){
        $products = Product::where('id', $id)->first();
        $tanggal = Carbon::now();

        

    }
    


}
