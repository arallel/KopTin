<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class userpagecontroller extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('userpage.index', compact('products'));
    }
}
