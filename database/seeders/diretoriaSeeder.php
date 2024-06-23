<?php

namespace Database\Seeders;

use App\Models\diretoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class diretoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diretorias = [
            /** Diretorias */
            [
                'nome_diretoria' => 'Sul',
                'diretor_id' => 2,
            ],
            [
                'nome_diretoria' => 'Sudeste',
                'diretor_id' => 3,
            ],
            [
                'nome_diretoria' => 'Centro-oeste',
                'diretor_id' => 4,
            ],
        ];

        foreach ($diretorias as $key => $value) {
            diretoria::create($value);
        }
    }
}
