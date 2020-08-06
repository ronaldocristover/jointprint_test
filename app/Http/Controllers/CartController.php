<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public $qty, $price, $discount;
    
    public function index()
    {
        return view('cart');
    }
}
