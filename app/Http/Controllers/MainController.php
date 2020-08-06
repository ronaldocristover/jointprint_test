<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function stringReducer($value = '')
    {
        $string = str_split($value);
        $string = array_count_values($string);
        $temp = '';
        foreach($string as $str => $val){
            if($val%2 === 1){
            $temp .= $str;
            }
        }
        echo $temp;
    }
}
