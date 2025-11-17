<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        $request->session()->regenerate();

    return redirect('/dashboard');

    }

    return back()->withErrors([
        'email' => 'Invalid login credentials.',
    ]);
}

    
public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    auth()->login($user);

    return redirect()
        ->to('/welcome')   // الصفحة اللي بعد التسجيل
        ->with('success', 'Account created successfully!');
}

}

