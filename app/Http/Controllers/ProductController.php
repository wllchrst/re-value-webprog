<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Auth;
use DB;
use Illuminate\Http\Request;

class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getPage(){
        $products = Product::orderBy("created_at", "desc")->where('sold', false)->paginate(20);
        return view("pages.product", compact("products"));
    }

    public function getDetail($id){
        $product = Product::findOrFail($id);
        return view("pages.product-detail", compact("product"));
    }

    public function buy($id) {
        $product = Product::findOrFail($id);

        if($product->sold == true) {
            return;
        }

        DB::transaction(function () use ($product) {
            $user = auth()->user();
            Transaction::create([
                "user_id" => $user->id,
                "product_id" => $product->id
            ]);

            $product->sold = true;
            $product->save();
        });

        return redirect()->route("product.getPage");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        $imagePath = ImageController::uploadImage($request, 'image');

        $product = Product::create([
            'name' => $validatedData['name'],
            'category' => $validatedData['category'],
            'price' => $validatedData['price'],
            'stock' => $validatedData['stock'],
            'image_path' => $imagePath,  // Store the image path if an image is uploaded
            'user_id' => $user->id,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Product created successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
