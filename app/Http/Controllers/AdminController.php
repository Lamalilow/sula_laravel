<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('users.admins.admin_panel');
    }
}
