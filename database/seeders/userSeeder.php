<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            /** Diretor geral */
            [
                'name' => 'Anataniel Diogo',
                'email' => 'anatanielmendes10@gmail.com.ao',
                'nivel' => 1,
                'password' => bcrypt(123),
            ],
            /** Diretores */
            [
                'name' => 'Vagner Mancini',
                'email' => 'vagner.mancini@magazineaziul.com.ao',
                'nivel' => 2,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Abel Ferreira',
                'email' => 'abel.ferreira@magazineaziul.com.ao',
                'nivel' => 2,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Rogerio Ceni',
                'email' => 'rogerio.ceni@magazineaziul.com.ao',
                'nivel' => 2,
                'password' => bcrypt(123),
            ],
            /** Gerentes */
            [
                'name' => 'Ronaldinho Gaucho',
                'email' => 'ronaldinho.gaucho@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Roberto Firmino',
                'email' => 'roberto.firmino@magazineaziul.com.ao
                ',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Alex de Souza',
                'email' => 'alex.de.souza@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Françoaldo Souza',
                'email' => 'françoaldo.souza@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Romário Faria',
                'email' => 'romário.faria@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Ricardo Goulart',
                'email' => 'ricardo.goulart@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Dejan Petkovic',
                'email' => 'dejan.petkovic@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Deyverson Acosta',
                'email' => 'deyverson.acosta@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Harlei Silva',
                'email' => 'harlei.silva@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Walter Henrique',
                'email' => 'walter.henrique@magazineaziul.com.ao',
                'nivel' => 3,
                'password' => bcrypt(123),
            ],
            /** Vendedores */
            [
                'name' => 'Afonso Afancar',
                'email' => 'afonso.afancar@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Alceu Andreoli',
                'email' => 'alceu.andreoli@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Amalia Zago',
                'email' => 'amalia.zago@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Carlos Eduardo',
                'email' => 'carlos.eduardo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Luiz Felipe',
                'email' => 'luiz.felipe@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Breno',
                'email' => 'breno@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Emanuel',
                'email' => 'emanuel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Ryan',
                'email' => 'ryan@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Vitor Hugo',
                'email' => 'vitor.hugo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Yuri',
                'email' => 'yuri@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Benjamin',
                'email' => 'benjamin@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Erick',
                'email' => 'erick@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Enzo Gabriel',
                'email' => 'enzo.gabriel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Fernando',
                'email' => 'fernando@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Joaquim',
                'email' => 'joaquim@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'André',
                'email' => 'andré@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Raul',
                'email' => 'raul@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Marcelo',
                'email' => 'marcelo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Julio César',
                'email' => 'julio.césar@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Cauê',
                'email' => 'cauê@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Benício',
                'email' => 'benício@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Vitor Gabriel',
                'email' => 'vitor.gabriel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Augusto',
                'email' => 'augusto@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Pedro Lucas',
                'email' => 'pedro.lucas@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Luiz Gustavo',
                'email' => 'luiz.gustavo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Giovanni',
                'email' => 'giovanni@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Renato',
                'email' => 'renato@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Diego',
                'email' => 'diego@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'João Paulo',
                'email' => 'joão.paulo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Renan',
                'email' => 'renan@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Luiz Fernando',
                'email' => 'luiz.fernando@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Anthony',
                'email' => 'anthony@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Lucas Gabriel',
                'email' => 'lucas.gabriel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Thales',
                'email' => 'thales@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Luiz Miguel',
                'email' => 'luiz.miguel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Henry',
                'email' => 'henry@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Marcos Vinicius',
                'email' => 'marcos.vinicius@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Kevin',
                'email' => 'kevin@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Levi',
                'email' => 'levi@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Enrico',
                'email' => 'enrico@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'João Lucas',
                'email' => 'joão.lucas@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Hugo',
                'email' => 'hugo@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Luiz Guilherme',
                'email' => 'luiz.guilherme@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Matheus Henrique',
                'email' => 'matheus.henrique@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Miguel',
                'email' => 'miguel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Davi',
                'email' => 'davi@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Gabriel',
                'email' => 'gabriel@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Arthur',
                'email' => 'arthur@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Lucas',
                'email' => 'lucas@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Matheus',
                'email' => 'matheus@magazineaziul.com.ao',
                'nivel' => 4,
                'password' => bcrypt(123),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
