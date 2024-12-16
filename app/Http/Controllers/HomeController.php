<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ItemType;

class HomeController extends Controller
{
    public function getHomePage()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(8);
        $item_types = ItemType::all();
        return view("pages.home", compact("products", "item_types"));
    }
}
