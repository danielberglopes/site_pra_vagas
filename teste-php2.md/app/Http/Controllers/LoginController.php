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
    $user = Auth::user();
    $userName = $user->name;

    return view('/welcome');
}




public function store(Request $request)
{
    // Validação dos dados do formulário (opcional)
  
    // Criação de um novo usuário com os dados fornecidos
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    // Redirecionamento para a página inicial ou outra página desejada
    return redirect('/');
}
}
