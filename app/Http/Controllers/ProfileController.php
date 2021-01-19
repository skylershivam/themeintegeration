<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    //for profile view
    public function index()
    {
        return view('theme.profile');
    }
}
