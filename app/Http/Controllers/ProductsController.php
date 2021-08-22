<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $product= User::orderBy('id', 'asc')->paginate(3);
        return view('product.index');
    }

    public function products_create()
    {
        $admin=Product::all();
        return view('product.products_create');
    }

}
