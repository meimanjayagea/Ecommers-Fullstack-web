<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order_Item;
use App\Models\Product;

class List_ItemController extends Controller
{
    public function index($id)
    {
        $data['orderitems'] = Order_Item::where('order_id', $id)->get();
        $data['id'] = $id;
        $data['products'] = product::get();

        return view('admin/orderitem/order_item', $data);
    }

    public function create(Request $request, $id)
    {
        $validate = $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required'
        ]);

        $itemorder = DB::table('orders_item')->insertGetId([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'qty' => $request->qty
        ]);

        if (!$itemorder) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return back()->with('success', 'Berhasil Menambahkan Data');
        }
    }

    public function edit($order_id, $id)
    {
        $data['products'] = product::all();
        $data['orderitem'] = Order_Item::where('id', $id)->where('order_id', $order_id)->first();
        return view('admin/orderitem/edit_item', $data);
    }

    public function update(Request $request, $order_id, $id)
    {
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required'
        ]);

        $itemorder = DB::table('orders_item')->where('id', $id)->update([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'qty' => $request->qty
        ]);

        if (!$itemorder) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin/order/' . $order_id)->with('success', 'Berhasil Mengubah Data');
        }
    }

    public function delete($order_id, $id)
    {

        $itemorder = DB::table('orders_item')->where('id', $id)->where('order_id', $order_id)->delete();

        if (!$itemorder) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return back()->with('success', 'Data Berhasil DiHapus');
        }
    }
}