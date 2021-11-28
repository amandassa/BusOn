<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Linha;

class LinhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $linhas = factory(Linha::class, 10)->make()->toArray();            
            foreach($linhas as $linha) {                
                DB::statement('insert into linha(direta, total_vagas, dias_semana, hora_partida) 
                values (?, ?, ?, ?)', [$linha['direta'], $linha['total_vagas'], $linha['dias_semana'], $linha['hora_partida']]);
            }
        DB::commit();
    }
}
