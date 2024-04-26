<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\auth;
use App\Models\User;

class LoginController extends Controller
{
    publiC function login(){
        return view('login');
    }



    public function auth(Request $request)
{
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication successful
        return view('welcome'); 
    } else {
        return redirect()->back()->with('error', 'Credenciais inválidas.')->withInput();

    }
}


public function welcome(){
    return view('/welcome');
}

}
