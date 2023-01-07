<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('login.register', [
            'title' => 'REGISTER'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|unique:users|max:15',
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:8'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('succses', 'Registration succsesfull! please login');

        return redirect('/login')->with('succses', 'Registration succsesfull! please login');
    }
}
