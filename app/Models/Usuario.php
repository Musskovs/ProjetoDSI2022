<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'escolaridade', 'papel', 'email', 'senha'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_usuario');
    }
}
