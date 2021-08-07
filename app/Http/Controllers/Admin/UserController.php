<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(10);
        return view('admin.user.list', compact('user'));
    }


    public function create()
    {
        $user = User::all();
        return view('admin.user.create', compact('user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto_profile' => 'required|image',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $nf = $request->file('profile')->store('profile') ;

        $user = new User;
        $user->foto_profile = $nf;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->input('password'));
        $user->level = $request->level;
        $user->save();

        if (!$user) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin.user.list')->with('success', 'Data Berhasil disimpan!');
        }
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}