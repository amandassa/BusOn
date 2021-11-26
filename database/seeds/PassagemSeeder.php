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
        DB::beginTransaction();
        $passagens = factory(Passagem::class, 10)->make()->toArray();            
            foreach($passagens as $passagem) {                
                DB::statement('insert into passagem(num_assento, codigo_linha, cpf_cliente, data) values (?, ?, ?, ?)',
                 [$passagem['num_assento'], $passagem['codigo_linha'], $passagem['cpf_cliente'], $passagem['data']]);
            }
        DB::commit();
    }
}
