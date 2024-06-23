<?php

namespace Database\Seeders;

use App\Models\vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendedores = [
            /** Vendedores */

            [
                'vendedor_id' => 15,
                'unidade_id' => 6,
            ],
            [
                'vendedor_id' => 16,
                'unidade_id' => 6,
            ],
            [
                'vendedor_id' => 17,
                'unidade_id' => 6,
            ],
            [
                'vendedor_id' => 18,
                'unidade_id' => 6,
            ],
            [
                'vendedor_id' => 19,
                'unidade_id' => 6,
            ],
            [
                'vendedor_id' => 20,
                'unidade_id' => 8,
            ],
            [
                'vendedor_id' => 21,
                'unidade_id' => 8,
            ],
            [
                'vendedor_id' => 22,
                'unidade_id' => 8,
            ],
            [
                'vendedor_id' => 23,
                'unidade_id' => 8,
            ],
            [
                'vendedor_id' => 24,
                'unidade_id' => 8,
            ],
            [
                'vendedor_id' => 25,
                'unidade_id' => 10,
            ],
            [
                'vendedor_id' => 26,
                'unidade_id' => 10,
            ],
            [
                'vendedor_id' => 27,
                'unidade_id' => 10,
            ],
            [
                'vendedor_id' => 28,
                'unidade_id' => 10,
            ],
            [
                'vendedor_id' => 29,
                'unidade_id' => 10,
            ],
            [
                'vendedor_id' => 30,
                'unidade_id' => 3,
            ],
            [
                'vendedor_id' => 31,
                'unidade_id' => 3,
            ],
            [
                'vendedor_id' => 32,
                'unidade_id' => 3,
            ],
            [
                'vendedor_id' => 33,
                'unidade_id' => 3,
            ],
            [
                'vendedor_id' => 34,
                'unidade_id' => 3,
            ],
            [
                'vendedor_id' => 35,
                'unidade_id' => 2,
            ],
            [
                'vendedor_id' => 36,
                'unidade_id' => 2,
            ],
            [
                'vendedor_id' => 37,
                'unidade_id' => 2,
            ],
            [
                'vendedor_id' => 38,
                'unidade_id' => 2,
            ],
            [
                'vendedor_id' => 39,
                'unidade_id' => 2,
            ],
            [
                'vendedor_id' => 40,
                'unidade_id' => 9,
            ],
            [
                'vendedor_id' => 41,
                'unidade_id' => 9,
            ],
            [
                'vendedor_id' => 42,
                'unidade_id' => 9,
            ],
            [
                'vendedor_id' => 43,
                'unidade_id' => 9,
            ],
            [
                'vendedor_id' => 44,
                'unidade_id' => 9,
            ],
            [
                'vendedor_id' => 45,
                'unidade_id' => 1,
            ],
            [
                'vendedor_id' => 46,
                'unidade_id' => 1,
            ],
            [
                'vendedor_id' => 47,
                'unidade_id' => 1,
            ],
            [
                'vendedor_id' => 48,
                'unidade_id' => 1,
            ],
            [
                'vendedor_id' => 49,
                'unidade_id' => 1,
            ],
            [
                'vendedor_id' => 50,
                'unidade_id' => 5,
            ],
            [
                'vendedor_id' => 51,
                'unidade_id' => 5,
            ],
            [
                'vendedor_id' => 52,
                'unidade_id' => 5,
            ],
            [
                'vendedor_id' => 53,
                'unidade_id' => 5,
            ],
            [
                'vendedor_id' => 54,
                'unidade_id' => 5,
            ],
            [
                'vendedor_id' => 55,
                'unidade_id' => 4,
            ],
            [
                'vendedor_id' => 56,
                'unidade_id' => 4,
            ],
            [
                'vendedor_id' => 57,
                'unidade_id' => 4,
            ],
            [
                'vendedor_id' => 58,
                'unidade_id' => 4,
            ],
            [
                'vendedor_id' => 59,
                'unidade_id' => 4,
            ],
            [
                'vendedor_id' => 60,
                'unidade_id' => 7,
            ],
            [
                'vendedor_id' => 61,
                'unidade_id' => 7,
            ],
            [
                'vendedor_id' => 62,
                'unidade_id' => 7,
            ],
            [
                'vendedor_id' => 63,
                'unidade_id' => 7,
            ],
            [
                'vendedor_id' => 64,
                'unidade_id' => 7,
            ],
        ];

        foreach ($vendedores as $key => $value) {
            vendedor::create($value);
        }
    }
}
