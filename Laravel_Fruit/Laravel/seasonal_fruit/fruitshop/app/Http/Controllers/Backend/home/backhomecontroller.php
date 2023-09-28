<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backhomecontroller extends Controller
{
     public function index()
    {
       return view ('Backend.home.home');
    }

}
