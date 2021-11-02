<?php

use App\Models\Funcionario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
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

            $funcionarios = factory(Funcionario::class, 10)->make()->toArray();

            foreach($funcionarios as $funcionario) {
                Funcionario::create($funcionario);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
