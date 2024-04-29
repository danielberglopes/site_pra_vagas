<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\auth;
use App\Models\User;
use App\Models\Post;
class LoginController extends Controller
{
    publiC function login(){
        return view('login');
    }



    public function auth(Request $request)
{
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication successful
        $user = Auth::user();
        
         $funcionário_empresa = $user->funcionário_empresa;
         

         if ($funcionário_empresa == 1) {
            $posts = Post::paginate(10);
            
            return view('index')->with('posts', $posts);
        }
        
        elseif($funcionário_empresa == 2){
            $filtro = $request->input('author'); 
  
            $posts = Post::where('author', 'like', '%' . $filtro . '%')->get();
           
       
            return view('welcome')->with('posts',$posts);
        }
        return redirect()->back()->with('error', 'Credenciais inválidas.')->withInput();
    } 
}


public function welcome(Request $request){
    $filtro = $request->input('author'); 
  
    $posts = Post::where('author', 'like', '%' . $filtro . '%')->get();

    return view('welcome')->with('posts', $posts);
}




public function store(Request $request)
{
    // Validação dos dados do formulário (opcional)
    $email = $request->input('email');
    $password = $request->input('password');
    $name = $request->input('name');
    $funcionário_empresa = $request->input('funcionário_empresa');

    // Usando dd() para exibir os valores
    
    // Criação de um novo usuário com os dados fornecidos
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->funcionário_empresa = $request->input('funcionário_empresa');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    // Redirecionamento para a página inicial ou outra página desejada
    return redirect('/');
}
}
