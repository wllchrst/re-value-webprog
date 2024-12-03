<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Auth;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getPage(){
        $items = Item::orderBy("created_at", "desc")->paginate();
        return view("pages.item", compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    private function getItemPoint(Item $item): int {

        return 1;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'weight' => 'required|numeric|min:1',
            'item_type_id' => 'required',
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

        $item = Item::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'weight' => $validatedData['weight'],
            'item_type_id' => $validatedData['item_type_id'],
            'user_id' => $user->id,
            'image_path' => $imagePath,
            'sold' => false,
        ]);

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
