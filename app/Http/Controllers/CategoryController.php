<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.category', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $category = Category::create([
            'name' => $request->name,
        ]);

        if ($category) {
            return redirect()->route('category.index')->with(['success', 'Category Berhasil Ditambahkan']);
        } else {
            return redirect()->back()->withInput()->with(['error', 'Category Gagal Ditambahkan']);
        }
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);
        if ($category) {
            return redirect()->route('category.index')->with(['success', 'Category Berhasil Diubah']);
        } else {
            return redirect()->back()->withInput()->with(['error', 'Category Gagal Diubah']);
        }
    }
    public function destroy($id)
    {
        $cek = Product::where('category_id', $id)->count();
        if ($cek > 0) {
            return redirect()->route('category.index')
                ->with(['error', 'Category tidak dapat dihapus karena masih memiliki produk']);
        } else {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('category.index')->with(['success', 'Category Berhasil Dihapus']);
        }
    }
}
