<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // COMMON FUNCTIONS
    public function index()
    {
        return view('dashboard');
    }

    // USER FUNCTIONS
    public function profile()
    {
        return 'profile';
    }

    // BLOGGER FUNCTIONS
    public function createPost()
    {
        return 'create post';
    }

    // ADMIN FUNCTIONS
    public function manageUser()
    {
        return 'manage user';
    }
}
