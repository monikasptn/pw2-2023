<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegistrationForm()
{
    return view('auth.register');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:5|confirmed',
        'role' => 'required',
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);

    return redirect('/login')->with('success', 'Registration successful. Please login.');
}

    /**
     * Display the specified resource.
     */
    public function showLoginForm()
{
    return view('auth.login');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function login(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($validatedData)) {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/movies')->with('success', 'Login successfully as admin');
        } else {
            return redirect('/')->with('success', 'Login successfully as user');
        }
    }

    return back()->withErrors([
        'email' => 'The provided validateData do not match our records.',
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
