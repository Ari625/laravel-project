<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\PoinController;

class UserController extends Controller
{
    public function user()
    {
        $data_users = user::all();
        return redirect()->action([PoinController::class, 'addpoin']);
    }
}
