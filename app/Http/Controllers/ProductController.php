<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Auth;
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
        $products = Product::orderBy("created_at", "desc")->paginate(20);
        return view("pages.product", compact("products"));
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

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Get the file from the request
            $imageFile = $request->file('image');
            // Generate a unique image name
            $imageName = time() . '.' . $imageFile->extension();
            // Move the image to the public 'images' directory
            $imageFile->move(public_path('images'), $imageName);
            // Set the image path prefix
            $imagePath = "images/" . $imageName;
        }

        // Create the product record
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
