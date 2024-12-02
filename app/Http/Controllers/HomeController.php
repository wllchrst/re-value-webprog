<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(6);
        return view("pages.home", compact("products"));
    }
}
