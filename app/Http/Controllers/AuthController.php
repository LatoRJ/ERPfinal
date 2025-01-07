<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Handle user signup.
     */
    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', 
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname ?? null,
            'lastname' => $request->lastname ?? null,
            'gender' => $request ->gender ?? null,
            'Contact_Number' => $request->Contact_Number ?? null,
            'Line_Address_1' => $request->Line_Address_1 ?? null,
            'Line_Address_2' => $request->Line_Address_2 ?? null,
            'Barangay' => $request->Barangay ?? null,
            'Municipality' => $request->Municipality ?? null,
            'City' => $request->City ?? null,
            'Postal_Code' => $request->Postal_Code ?? null,
            'Role' => 'customer', 
        ]);


        Auth::login($user);


        return redirect('/home')->with('success', 'Account created successfully. Welcome!');
    }

    /**
     * Handle user login.
     */
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->Role === 'admin' && Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Welcome Admin!');

        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect('/home')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {

        Auth::logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }


    public function getUsers()
    {

        $users = User::where('Role', '!=', 'admin')->get();

        return view('users.index', ['users' => $users]);
    }
}
