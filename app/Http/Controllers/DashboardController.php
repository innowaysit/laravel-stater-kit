<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $roles = Role::count();
        $users = User::count();
        $blogs = Blog::count();
        return view('dashboard.index', compact('roles', 'blogs', 'users'));
    }
}
