<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function leaderboard(){
        $data_users = User::all();
        $no = 1;
        return view('leaderboard', [
            'title' => 'LEADERBOARD',
            'data_users' => $data_users,
            'no' => $no
        ]);
    }
}