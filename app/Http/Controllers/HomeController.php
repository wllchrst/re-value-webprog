<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage()
    {
        $products = Product::all();
        return view("pages.home", compact("products"));
    }
}
