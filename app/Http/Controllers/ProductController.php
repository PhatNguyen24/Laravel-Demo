<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function showProducts()
    {
        return view('products');
    }
}
