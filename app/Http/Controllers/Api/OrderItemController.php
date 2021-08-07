<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order_Item;
use Illuminate\Http\Request;


class OrderItemController extends Controller
{

    public function index($id)
    {
        $data = Order_Item::with('product')->where('order_id', $id)->get();
        if (is_null($data)) {
            return response()->json(['message' => ' Data tidak ditemukan!']);
        }
        return response()->json(['data' => $data]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $data = $request->all();
        Order_Item::create($data);
        $orderitem = Order_Item::where('order_id', $data['order_id'])->get();

        if (is_null($orderitem)) {
            return response()->json(['message' => ' Data tidak ditemukan!']);
        }
        return response()->json(['data' => $orderitem]);
    }

    public function show($id)
    {
        //
    }


    public function edit($order_id, $id)
    {
        $data = Order_Item::where('order_id', $order_id)->where('id', $id)->get();

        if (is_null($data)) {
            return response()->json(['message' => ' Data tidak ditemukan!']);
        }
        return response()->json(['data' => $data]);
    }


    public function update(Request $request, $order_id, $id)
    {
        $request->validate([
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $data = Order_Item::where('order_id', $order_id)->where('id', $id)->update(
            [
                'order_id' => $request->order_id,
                'product_id' => $request->product_id,
                'qty' => $request->qty,
            ]
        );
        if (is_null($data)) {
            return response()->json(['message' => ' Data tidak ditemukan!']);
        }
        $orderitem = Order_Item::where('id', $id)->get();
        return response()->json(['data' => $orderitem]);
    }


    public function destroy($order_id, $id)
    {
        Order_Item::where('order_id', $order_id)->where('id', $id)->delete();
        $orderitem = Order_Item::where('order_id', $order_id)->get();

        if (is_null($orderitem)) {
            return response()->json(['message' => ' Data tidak bisa dihapus!']);
        }
        return response()->json(['data' => $orderitem]);
    }

    public function search($product_id)
    {
        $data = Order_Item::with('product')->where("product_id", "like", "%" . $product_id . "%")->get();
        if (count($data)) {
            return response()->json(['data' => $data]);
        }
        return response()->json(['message' => ' Data tidak bisa dicari!']);
    }
}