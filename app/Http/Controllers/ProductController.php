<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.product', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('products.detail', compact('product'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
            'produk' => 'required',
            'category_id' => 'required',
            // 'brand_id' => 'required',
        ]);
        // $produk = Storage::putFileAs('produk', new File('produk'), '$request->produk');
        // $produk = $request->file('produk')->store('produks');
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'produk' => $request->file('produk')->store('produks'),
            'category_id' => $request->category_id,
            // 'brand_id' => $request->brand_id,
        ]);

        if ($product) {
            return redirect()->route('product.index')->with(['success', 'Produk Berhasil Ditambahkan']);
        } else {
            return redirect()->back()->withInput()->with(['error', 'Produk Gagal Ditambahkan']);
        }
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
            // 'image' => 'required',
            'category_id' => 'required',
            // 'brand_id' => 'required',
        ]);
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            // 'image' => $request->image,
            'category_id' => $request->category_id,
            // 'brand_id' => $request->brand_id,
        ]);

        if ($product) {
            return redirect()->route('product.index')->with(['success', 'Produk Berhasil Ditambahkan']);
        } else {
            return redirect()->back()->withInput()->with(['error', 'Produk Gagal Ditambahkan']);
        }
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        if ($product) {
            return redirect()->route('product.index')->with(['success' => 'Produk Berhasil Dihapus!']);
        } else {
            return redirect()->route('product.index')->with(['error' => 'Produk Gagal Dihapus']);
        }
    }
}
