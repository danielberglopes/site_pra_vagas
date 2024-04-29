<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\auth;
use App\Models\User;
abstract class Controller
{
    
            public function adim(){
        return view('adim.empressa');
            }
   
}
