<?php

use App\Models\Trecho;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrechoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $trechos = factory(Trecho::class, 10)->make()->toArray();
        foreach($trechos as $trecho){
            DB::statement('insert into trecho(cidade_partida, cidade_chegada, duracao, preco, ordem) values(?, ?, ?, ?, ?)',
            [$trecho['cidade_partida'], $trecho['cidade_chegada'], $trecho['duracao'], $trecho['preco'], $trecho['ordem']]);
        }

        DB::commit();
    }
}
