<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    
    public function index()
    {
        $data['users'] = DB::table('users')->get();
        $data['orders'] = DB::table('orders')
            ->select('orders.id', 'orders.user_id', 'users.name', 'orders.tanggal_order')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->orderBy('orders.id', 'DESC')
            ->paginate(10);

        return view('admin/order/list', $data);
    }

    public function create()
    {
        $data['users'] = DB::table('users')->get();
        return view('admin/order/insert', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'tanggal_order' => 'required',
        ]);

        $user_id = $request->input('user_id');
        $tanggal_order = $request->input('tanggal_order');

        $order = new order;
        $order->user_id = $user_id;
        $order->tanggal_order = $tanggal_order;
        $order->save();
        $id = $order->id;

        if (!$id) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin/order/' . $id)->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function edit($id)
    {
        $data['users'] = DB::table('users')->get();
        $data['order'] = DB::table('orders')->where('id', $id)->first();

        return view('admin/order/edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'tanggal_order' => 'required',
        ]);

        $user_id = $request->input('user_id');
        $tanggal_order = $request->input('tanggal_order');

        $order = Order::find($id);
        $order->user_id = $user_id;
        $order->tanggal_order = $tanggal_order;
        $order->update();

        if (!$id) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin/order/')->with('success', 'Berhasil Mengubah Data');
        }
    }

    public function destroy($id)
    {

        $order = DB::table('orders')->where('id', $id)->delete();
        
        if (!$order) {
            return back()->with('error', 'Data Gagal dihapus!');
        } else {
            return redirect('admin/order')->with('success', 'Data Berhasil Dihapus');
        }

    }
}