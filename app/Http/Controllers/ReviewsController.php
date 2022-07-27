<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function criar(Curso $idcurso)
    {
        return view('reviews/criar', [
            'curso' => $idcurso,
        ]);
    }

    public function inserir(request $form, $idcurso)
    {
        $usuario = session()->get('usuario');
        $dados = $form->validate([
            'nota' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

        $review = new Review();
        $review->id_curso = $idcurso;
        $review->id_usuario = $usuario->id;
        $review->nota = $dados['nota'];
        $review->titulo = $dados['titulo'];
        $review->descricao = $dados['descricao'];
        $review->save();

        //Review::create($dados);
        
        return redirect()->route('curso.ver', $idcurso);
        
    }
}
