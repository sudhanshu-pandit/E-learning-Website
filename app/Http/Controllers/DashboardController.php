<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.student');
    }
    public function adminHome()
    { 
       
        $users = User::all();
        if(Auth::check()) {
        return view('dashboard.admin-home',compact('users','users'));
        }
        return redirect("login")->with('You are not allowed to access');
    }


}
