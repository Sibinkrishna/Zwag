<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('website.auth.login');
    }
    public function login(Request $request)
    {

        return redirect()->route('website.home')->with('success', 'Logged in successfully.');
    }
    public function register(){
        return view('website.auth.register');
    }
    public function registerStore(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'mobile'=> 'required|integer|unique:users,mobile',
            'password' => 'required|min:6|confirmed',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email is already registered',
            'mobile.required' => 'Phone number is required',
            'mobile.unique' => 'This phone number is already registered',
            'mobile.integer' => 'Phone number must be a valid number',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'Password confirmation does not match',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->status = 1;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'success'=> true,
            'message'=> 'Registered successfully.',
            'redirect'=> route('website.home'),
            ],200);

    }
    public function logout(Request $request)
    {
        // Logout logic here
        return redirect()->route('website.login')->with('success', 'Logged out successfully.');
    }
}
