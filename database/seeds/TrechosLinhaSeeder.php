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
        $trechoslinhas = factory(TrechosLinha::class, 1)->make()->toArray()[0];                            
        foreach($trechoslinhas as $trecholinha) {                
            DB::statement('insert into trechos_linha(codigo_linha, codigo_trecho, ordem) values (?, ?, ?)',
                [$trecholinha['codigo_linha'], $trecholinha['codigo_trecho'], $trecholinha['ordem']]);            
        }        
        DB::commit();
        dd($trechoslinhas);
    }
}
