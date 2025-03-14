<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.dashboard');
    }

    public function superAdminIndex()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}
