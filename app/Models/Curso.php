<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'tipo', 'instituicao', 'modalidade'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_curso');
    }

}
