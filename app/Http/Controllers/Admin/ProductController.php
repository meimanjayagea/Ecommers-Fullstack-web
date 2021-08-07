<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;


class productController extends Controller
{

    public function index()
    {
        $product = Product::paginate(10);
        return view('admin.product.list', compact('product'));
    }

    public function create()
    {
        $product = Category::get();
        return view('admin.product.create', compact('product'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'gambar_product' => 'required',
            'harga' => 'required|integer',
            'category_id' => 'required',
            'stock' => 'required|integer',
            'varian' => 'required',
            'keterangan' => 'required',
        ]);

        $product = new Product;
        $product->kode = $request->kode;
        $product->name = $request->name;
        $product->gambar_product = $request->gambar_product;
        $product->harga = $request->harga;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        $product->varian = $request->varian;
        $product->keterangan = $request->keterangan;
        $product->save();

        if (!$product) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin/product')->with('success', 'Data Berhasil disimpan!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::get();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'gambar_product' => 'required',
            'harga' => 'required|integer',
            'category_id' => 'required',
            'stock' => 'required|integer',
            'varian' => 'required',
            'keterangan' => 'required',

        ]);

        $product = Product::find($id);

        $product->kode = $request->kode;
        $product->name = $request->name;
        $product->gambar_product = $request->gambar_product;
        $product->harga = $request->harga;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        $product->varian = $request->varian;
        $product->keterangan = $request->keterangan;
        $product->save();


        if (!$product) {
            return back()->with('error', 'Data gagal disimpan!');
        } else {
            return redirect('admin/product')->with('success', 'Data Berhasil disimpan!');
        }
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        if (!$product) {
            return back()->with('error', 'Data Gagal dihapus!');
        } else {
            return back()->with('success', 'Data berhasil dihapus!');
        }
    }
}