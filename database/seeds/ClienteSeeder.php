<?php

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //try {
            DB::beginTransaction();
            $clientes = factory(Cliente::class, 10)->make()->toArray();            
            foreach($clientes as $cliente) {                
                DB::statement('insert into cliente(nome, cpf, email, password) values (?, ?, ?, ?)',
                 [$cliente['nome'], $cliente['cpf'], $cliente['email'], $cliente['password']]);
            }
            DB::commit();
            
        /*} catch (Exception $e) {
         //   DB::rollBack();
        }*/
    }
}
