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
        DB::beginTransaction();
        $total_linhas = DB::select('select * from linha');
        $total_trechos = DB::select('select * from trecho');
        $trechoslinhas = factory(TrechosLinha::class, 10)->make()->toArray();            
            foreach($trechoslinhas as $trecholinha) {                
                DB::statement('insert into trechos_linha(codigo_linha, codigo_trecho, partida, dia_semana, ordem) values (?, ?, ?, ?, ?)',
                 [random_int(1, count($total_linhas)), random_int(1, count($total_trechos)), $trecholinha['partida'], $trecholinha['dia_semana'], $trecholinha['ordem']]);
            }
        DB::commit();
    }
}
