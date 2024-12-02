<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        $user = Auth::user();
        $item_types = ItemType::all();
        return view("pages.profile", compact('user', 'item_types'));
    }

    public function updateUser(Request $request)
    {
        return "GOOD";
    }
}
