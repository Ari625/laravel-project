<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'LOGIN'
        ]);
    }

    //function login
    public function autenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
            if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/profile');
            }

        return back()->with('LoginError', 'Login failled!');
    }

    //function logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
