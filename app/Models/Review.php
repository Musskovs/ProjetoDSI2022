<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id_curso', 'id_usuario', 'nota', 'titulo', 'descricao'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }
}
