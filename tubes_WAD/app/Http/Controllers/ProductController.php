<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        Product::create([
            'product_name' => $request->name,
            'product_category' => $request->category,
            'price' => $request->harga,
            'stock' => $request->stok,
            'description' => $request->description,
            'image' => $filename,
        ]);




        return redirect('/product')->with('success', 'Berhasil menambahkan produk');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        $produk = Product::find($id);
        unlink("storage/$produk->image");
        $produk->update([
            'product_name' => $request->name,
            'product_category' => $request->category,
            'price' => $request->harga,
            'stock' => $request->stok,
            'description' => $request->deskripsi,
            'image' => $filename,
        ]);
        return redirect('/product')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy($id)
    {
        $produk = Product::find($id);
        unlink("storage/$produk->image");
        $produk->delete();
        return redirect('/product')->with('success', 'Produk berhasil dihapus');
    }
}
