<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function AllUser(){
        $users = User::all();
        return view('backend.user.all_users', compact('users'));

    }
}
