<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $totalposts= Post::all()->count();
        $totalusers= User::all()->count();

        return view('Admin.dashboard',compact('totalposts','totalusers'));
    }

    public function chats()
    {
        
        $allchats = Contact::all();
        $users= User::all();

        return view('admin.chats',compact('allchats','users'));
    }


}
