<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class fronhomecontroller extends Controller
{

        public function index()
        {
            $products = product::all(); // a ena mate select ni query che product home page par show thase.
            // dd($products);
        //  $products = Product::where('id','=',1);
        //  $products = Product::where('id',3)->get();
        //  $products = Product::where('id',3)->get('quantity');
        //  $products = Product::where('id',3)->first(['quantity','id']);
        //  dd($products)
            return view('Frontend.home.home',compact('products'));
        }

}
