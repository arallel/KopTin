<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class userpagecontroller extends Controller
{
    public function index()
    {
        return view('userpage.index');
    }
}
