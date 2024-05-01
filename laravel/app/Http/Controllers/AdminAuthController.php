<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginPage() {
        return view("auth.login");
    }

    public function login(Request $request) {
        $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($request->only("email", "password"))) {

            Log::log("Admin Logged In", auth()->user()->id);

            return redirect("/admin");
        } else {
            return redirect()->back()->withErrors(("Invalid email or password"));
        }
    }

}
