<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;

class Readcontroller extends Controller
{
    //
    public function read(){

        $products = Table1::all();
        return view('read', compact('products'));
    }




}
