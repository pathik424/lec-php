<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view ('Frontend.register.register');
    }
    public function login()
    {
        return view ('Frontend.login.login');
    }

    public function store(request $request)
    {
        // dd($request->name);
        // dd($request->username);
        // dd($request->email);
        // dd($request);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect ('/login');
        //php artisan migrate
    }
    public function validate_login(request $request)
    {
        // dd($request);
        $request->validate(['email'=>'required','password'=>'required']); //ana thi backand ma upadte thase compulsary field thase

        $credential =$request->only('email','password'); // only email ane password e adjust karvu hoy to 2 j field rakhavi hoy to request
        // dd($credential);

        if(Auth::attempt($credential))

        {
            // dd(Auth::user()); user thi single user no data avse role as pan mali jase ani biji badhi details pan mali jase
            if(Auth::user()->role_as == 1) // role as as set karyu login karyu to
            {
                return redirect('/admin/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

            }
            else if(Auth::user()->role_as == 0) //  role as as set karyu login karyu to
            {
                return redirect('/home')->with('message','Login Success'); // with thi message show thase success or failed

            }
            else //  role as as set karyu login karyu to
            {
                return redirect('/home')->with('message','Login Success'); // with thi message show thase success or failed

            }
            // dd('Login Success');
        }
        else
        {
            return redirect('/login')->with('message','Login Failed'); // with thi message show thase success or failed
            // dd('Login Failed');
        }

    }

    public function logout()
    {
        Auth::logout();
        Session:flush();
        return redirect('/home');
    }
}

