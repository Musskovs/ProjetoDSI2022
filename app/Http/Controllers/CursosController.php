<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos/index', [
            'cursos' => $cursos,
        ]);
    }

    public function ver(Curso $id)
    {
        $curso = Curso::with(["reviews", "reviews.usuario"])->find($id);
        //dd($curso);
        return view('cursos/ver', [
            'curso' => $curso,
        ]);
    }

    public function criar()
    {
        return view('cursos/criar');
    }

    public function inserir(Request $form)
    {

        $dados = $form->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'instituicao' => 'required',
            'modalidade' => 'required'
        ]);

        Curso::create($dados);

        return redirect()->route('home');
    }

}
