<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemTransaction;
use Auth;
use DB;
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

    public function getPage()
    {
        $items = Item::orderBy("created_at", "desc")->where("sold", false)->paginate();
        return view("pages.item", compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    private function getItemPoint(Item $item): int
    {
        // $itemTypes = [
        //     ['name' => 'Plastic', 'description' => 'Items with plastic material'],
        //     ['name' => 'Metal', 'description' => 'Items with metal material'],
        //     ['name' => 'Glass', 'description' => 'Items made from glass'],
        //     ['name' => 'Paper', 'description' => 'Paper-based items'],
        //     ['name' => 'Fabric', 'description' => 'Fabric materials for recycling'],
        // ];

        $multiplier = 0;

        $item_type = $item->item_type->name;

        if ($item_type == 'Plastic') $multiplier = 1;
        else if ($item_type == 'Metal') $multiplier = 3;
        else if ($item_type == 'Glass') $multiplier = 2;
        else if ($item_type == 'Paper') $multiplier = 1;
        else if ($item_type == 'Fabric') $multiplier = 2;

        return $multiplier * $item->weight;
    }

    public function getDetail($id)
    {
        $item = Item::findOrFail($id);

        return view('pages.item-detail', compact("item"));
    }

    public function buy($id)
    {
        $item = Item::findOrFail($id);

        if ($item->sold) {
            return redirect()->route("item.getPage");
        }

        DB::transaction(function () use ($item) {
            $user = auth()->user();

            $point = $this->getItemPoint($item);
            $user->point = $user->point + $point;
            $user->save();

            ItemTransaction::create([
                "user_id" => $user->id,
                "item_id" => $item->id
            ]);

            $item->sold = true;
            $item->save();
        });

        return redirect()->route("item.getPage");
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

        $imagePath = ImageController::uploadImage($request, 'image');

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
