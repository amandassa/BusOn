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
        try {
            DB::beginTransaction();

            $clientes = factory(Cliente::class, 10)->make()->toArray();

            foreach($clientes as $cliente) {
                Cliente::create($cliente);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
