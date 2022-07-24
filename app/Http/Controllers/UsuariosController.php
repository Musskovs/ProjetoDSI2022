<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        return view('usuarios.index');
    }

    public function login(Request $form)
    {
        $email = $form->email;
        $senha = $form->password;

        $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();
        
        if ($usuario->count()) {
            $form->session()->put('usuario', $usuario[0]);
            return redirect()->route('home');
        } else {
            return redirect()->route('usuario.index')->with(
                'error',
                'Usuário ou senha inválidos'
            );
        }
    }

    public function criar()
    {
        return view('usuarios.criar');
    }

    public function inserir(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'papel' => 'required',
            'escolaridade' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);

        Usuario::create($dados);
        
        return redirect()->route('home');
    }

    public function logout(){
        session()->forget('usuario');
        return redirect()->route('home');
    }
}
