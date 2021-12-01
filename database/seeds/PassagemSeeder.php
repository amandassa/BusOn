<?php

use App\Models\Passagem;
use Illuminate\Database\Seeder;

class PassagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passagens = [];
        for($i = 0; $i < 10; $i++){ // Gera uma dada quantidade de passagem com número do assento sem repeticao
            DB::beginTransaction();        
            $passagem = factory(Passagem::class, 1)->make()->toArray()[0];               
            DB::insert('insert into passagem(num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) values (?, ?, ?, ?, ?, ?)', [ $passagem['num_assento'], $passagem['codigo_linha'], $passagem['cidade_partida'], $passagem['cidade_chegada'], $passagem['cpf_cliente'], $passagem['data']]);                        
            DB::commit();
            array_push($passagens, $passagem);
        }
        dd($passagens);

    }
}
