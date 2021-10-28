<?php

use Illuminate\Database\Seeder;

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

            $funcionarios = factory(class: Funcionario::class, amount: 10)->make()->toArray();

            foreach($funcionarios as $funcionario) {
                Funcionario::create($funcionario);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
