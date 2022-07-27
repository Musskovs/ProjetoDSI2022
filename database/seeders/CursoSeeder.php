<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nome' => 'Economia',
            'tipo' => 'Graduação',
            'instituicao' => 'UCS',
            'modalidade' => 'Presencial',
        ]);

        DB::table('cursos')->insert([
            'nome' => 'Ciência da Computação',
            'tipo' => 'Graduação',
            'instituicao' => 'Unisinos',
            'modalidade' => 'Híbrido'
        ]);

        DB::table('cursos')->insert([
            'nome' => 'Engenharia de Software',
            'tipo' => 'Pós-Graduação',
            'instituicao' => 'PUCRS',
            'modalidade' => 'EAD'
        ]);
    }
}