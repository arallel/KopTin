<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.product', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required',
            'description' => 'required',
            //  'category_id' => 'required',
            // 'brand_id' => 'required',
        ]);

        $product =Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            // 'category_id' => $request->category_id,
            // 'brand_id' => $request->brand_id,
        ]);

        if($product)
        {
            return redirect()->route('product.index')->with(['success', 'Produk Berhasil Ditambahkan']);
        }else{
            return redirect()->back()->withInput()->with(['error', 'Produk Gagal Ditambahkan']);
        }
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required',
            'description' => 'required',
            // 'image' => 'required',
            // 'category_id' => 'required',
            // 'brand_id' => 'required',
        ]);
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            // 'image' => $request->image,
            // 'category_id' => $request->category_id,
            // 'brand_id' => $request->brand_id,
        ]);

        if($product)
        {
            return redirect()->route('product.index')->with(['success', 'Produk Berhasil Ditambahkan']);
        }else{
            return redirect()->back()->withInput()->with(['error', 'Produk Gagal Ditambahkan']);
        }
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        if($product)
        {
            return redirect()->route('product.index')->with(['success' => 'Produk Berhasil Dihapus!']);
        }else{
            return redirect()->route('product.index')->with(['error' => 'Produk Gagal Dihapus']);
        }
    }
}
