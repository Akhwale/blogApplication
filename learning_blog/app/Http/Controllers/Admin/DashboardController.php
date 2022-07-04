<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalposts= Post::all()->count();
        $totalusers= Post::all()->count();

        return view('Admin.dashboard',compact('totalposts','totalusers'));
    }
}
