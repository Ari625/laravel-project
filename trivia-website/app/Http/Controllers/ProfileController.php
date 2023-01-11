<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile', [
            'title' => 'PROFILE'
        ]);
    }

    public function editprofile(){
        return view('account', [
            'title' => 'ACCOUNT'
        ]);
    }
}
