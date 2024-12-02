<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user_type = Auth::user()->user_type; // Assuming the user type is stored in a 'user_type' field
            if ($user_type == 'admin') {
                return view('admin.index');
            } elseif ($user_type == 'user') {
                return view('home.index');
            }
        }

        return redirect('login');
    }
}
