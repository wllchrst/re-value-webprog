<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        $user = Auth::user();
        return view("pages.profile", compact('user'));
    }

    public function updateUser(Request $request)
    {
        return "GOOD";
    }
}
