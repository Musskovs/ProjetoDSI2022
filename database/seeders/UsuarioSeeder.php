<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'Carlos Eduardo',
            'escolaridade' => 'Superior',
            'papel' => 'Admin',
            'email' => 'carlos.eduardo@gmail.com',
            'senha' => '123123123',
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Afonso Cunha',
            'escolaridade' => 'Superior Incompleto',
            'papel' => 'Usuário',
            'email' => 'afonso.cunha@gmail.com',
            'senha' => '321321321',
        ]);
        
        DB::table('usuarios')->insert([
            'nome' => 'Everton Silva',
            'escolaridade' => 'Pós-Graduado',
            'papel' => 'Usuário',
            'email' => 'everton.silva@gmail.com',
            'senha' => 'everton123silva321',
        ]);
    }
}
