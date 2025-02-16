<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            Cookie::queue(Cookie::make('user_session', $user->id, 60));
            return redirect()->route('admin');
        } else {
            return back()->with('error', 'Credenciales incorrectas');
        }
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('user_session'));
        return redirect('/');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);
        Cookie::queue(Cookie::make('user_session', $user->id, 60 * 24));

        return redirect()->route('admin');
    }
}