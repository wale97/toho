<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescController extends Controller
{
    //
    public function description(){
        return view ('desc');
    }
}
