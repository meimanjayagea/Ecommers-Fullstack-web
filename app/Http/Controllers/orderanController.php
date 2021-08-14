<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Item;
use App\Models\product;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderanController extends Controller
{
    public function index($id)
    {
        $product = Product::where('id', $id)->first();
        $lastProducts = Product::paginate(6);

        return view('website/product', compact('product','lastProducts'));
    }


public function order(Request $request, $id)
{
   $product = product::where('id', $id)->first();
   $tanggal = Carbon::now();

   //validasi melebihi stock
        if ($request->jumlah_pesan > $product->stok) {
            return redirect('pesan/' . $id);
        }

   //cek validasi
    $cek_orderan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
    if(empty($cek_orderan)){
        $orderan = new Order;
        $orderan->user_id = Auth::user()->id;
        $orderan->tanggal_order = $tanggal;
        $orderan->status = 0;
        $orderan->kode_unik = mt_rand(100,999);
        $orderan->jumlah_harga = 0;
        $orderan->save(); 
    }

    //simpan ke database Order detail
    $pesanan_baru = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

    //cek Pesanan detail
    $cek_pesanan_detail = Order_Item::where('order_id', $product->id)->where(
        'order_id', $pesanan_baru->id)->first();

    if (empty($cek_pesanan_detail)) {
        $pesanan_detail = new Order_Item;
        $pesanan_detail->order_id = $pesanan_baru->id;
        $pesanan_detail->product_id = $product->id;
        $pesanan_detail->qty = $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga = $product->harga * $request->jumlah_pesan;
        $pesanan_detail->save();
    }else{
         $pesanan_detail = Order_Item::where('product_id', $product->id)->where(
            'order_id',
            $pesanan_baru->id
        )->first();

        $pesanan_detail->qty = $pesanan_detail->qty + $request->jumlah_pesan;

        $harga_pesanan_detail_baru = $product->harga * $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
        $pesanan_detail->update();
    }

    //total pesanan
        $orderan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $orderan->jumlah_harga = $orderan->jumlah_harga + $product->harga * $request->jumlah_pesan;
        $orderan->update();

        // SweetAlert::success('Pesanan Sukses Masuk Keranjang!', 'success');
        return redirect('website/checkout');
    }
}