<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class backhomecontroller extends Controller
{
     public function index()
    {
       return view ('Backend.home.home');
    }
    public function GetUsersData()
    {

        $users = User::all();
        $products = product::all();
        // dd('$users');
        //  Run karane ke liye http://localhost:8000/api/users
        // routes ma jaine path banavo padse api ni file ma users no
        // return response()->json($users);
        return response()->json([$users,$products]);

    }

}
