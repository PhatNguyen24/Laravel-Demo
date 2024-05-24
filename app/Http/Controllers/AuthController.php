<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)
                    ->where('password', $password)
                    ->first();

        if ($user) {
            $products = Product::all();
            return view('products', ['products' => $products]);
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
