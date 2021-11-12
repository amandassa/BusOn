<?php

use App\Models\TrechosLinha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrechosLinhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        //esse seeder tem que rodar os factories de Trecho, Linha e TrechosLinha
        DB::beginTransaction();
        $trechos = factory(Trecho::class, 10)->make()->toArray();
        foreach($trechos as $trecho){
            DB::statement('insert into trecho(cidade_partida, cidade_chegada, duracao, preco) values(?, ?, ?, ?)',
            [$trecho['cidade_partida'], $trecho['cidade_chegada'], $trecho['duracao'], $trecho['preco']]);
        }
        DB::commit();

        DB::beginTransaction();
        $linhas = factory(Linha::class, 10)->make()->toArray();            
            foreach($linhas as $linha) {                
                DB::statement('insert into linha(direta, total_vagas) values (?, ?)',
                 [$linha['direta'], $linha['total_vagas']]);
            }
        DB::commit();
*/
        DB::beginTransaction();
        $trechoslinhas = factory(TrechosLinha::class, 10)->make()->toArray();            
            foreach($trechoslinhas as $trecholinha) {                
                DB::statement('insert into trechos_linha(codigo_linha, codigo_trecho, partida, dia_semana, ordem) values (?, ?, ?, ?, ?)',
                 [random_int(1, 10), random_int(1, 10), $trecholinha['partida'], $trecholinha['dia_semana'], $trecholinha['ordem']]);
            }
        DB::commit();
    }
}
