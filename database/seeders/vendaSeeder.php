<?php

namespace Database\Seeders;

use App\Models\venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendas = [
            /** Vendas */
            [
                'vendedor_id' => 15,
                'valor_venda' => 1800,
                'diretoria_id' => 2,
                'unidade_id' => 6,
                'local' => json_encode(['-30.048750057541955', '-51.228587422990806']),
                'status' => 0,
            ],
            [
                'vendedor_id' => 20,
                'valor_venda' => 800,
                'diretoria_id' => 3,
                'unidade_id' => 8,
                'local' => json_encode(['-30.048750057541955', '-51.228587422990806']),
                'status' => 1,
            ],
        ];

        foreach ($vendas as $key => $value) {
            venda::create($value);
        }
    }
}
