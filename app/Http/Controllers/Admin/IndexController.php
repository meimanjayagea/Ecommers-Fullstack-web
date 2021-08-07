<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $cP = DB::table('products')->get()->count();
        $cO = DB::table('orders')->get()->count();
        $cU = DB::table('users')->where('level', 'USER')->get()->count();
        return view('/admin/dashboard', compact('cP', 'cU', 'cO'));
    }
}