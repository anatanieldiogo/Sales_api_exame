<?php

namespace Database\Seeders;

use App\Models\unidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class unidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            /** Unidades */
            [
                'nome_unidade' => 'Luanda',
                'gerente_id' => 5,
                'diretoria_id' => 1,
                'local' => json_encode(['-30.048750057541955', '-51.228587422990806']),
            ],
            [
                'nome_unidade' => 'Benguela',
                'gerente_id' => 6,
                'diretoria_id' => 1,
                'local' => json_encode(['-27.55393525017396', '-48.49841515885026']),
            ],
            [
                'nome_unidade' => 'Malange',
                'gerente_id' => 7,
                'diretoria_id' => 1,
                'local' => json_encode(['-25.473704465731746', '-49.24787198992874']),
            ],
            [
                'nome_unidade' => 'Huambo',
                'gerente_id' => 8,
                'diretoria_id' => 2,
                'local' => json_encode(['-23.544259437612844', '-46.64370714029131']),
            ],
            [
                'nome_unidade' => 'Bengo',
                'gerente_id' => 9,
                'diretoria_id' => 2,
                'local' => json_encode(['-22.923447510604802', '-43.23208495438858']),
            ],
            [
                'nome_unidade' => 'Huila',
                'gerente_id' => 10,
                'diretoria_id' => 2,
                'local' => json_encode(['-19.917854829716372', '-43.94089385954766']),
            ],
            [
                'nome_unidade' => 'Namibia',
                'gerente_id' => 11,
                'diretoria_id' => 2,
                'local' => json_encode(['-20.340992420772206', '-40.38332271475097']),
            ],
            [
                'nome_unidade' => 'Huambo',
                'gerente_id' => 12,
                'diretoria_id' => 3,
                'local' => json_encode(['-20.462652006300377', '-54.615658937666645']),
            ],
            [
                'nome_unidade' => 'Kwanza Sul',
                'gerente_id' => 13,
                'diretoria_id' => 3,
                'local' => json_encode(['-16.673126240814387', '-49.25248826354209']),
            ],
            [
                'nome_unidade' => 'Kwanza Norte',
                'gerente_id' => 14,
                'diretoria_id' => 3,
                'local' => json_encode(['-15.601754458320842', '-56.09832706558089']),
            ],
        ];

        foreach ($unidades as $key => $value) {
            unidade::create($value);
        }
    }
}
