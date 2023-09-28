<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fronhomecontroller extends Controller
{

        public function index()
        {
            return view('Frontend.home.home');
        }
    
}
