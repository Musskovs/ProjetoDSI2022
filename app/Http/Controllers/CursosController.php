<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Review;
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
        //$curso = Curso::find($id);
        //$reviews = Review::where('id_curso', $id);
        $cursos = Curso::with(["reviews", "reviews.usuario"])->find($id);
        return view('cursos/ver', [
            'cursos' => $cursos,
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

    public function review(Curso $id)
    {
        return view('cursos/review', [
            'curso' => $id,
        ]);
    }
}
