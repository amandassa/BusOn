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
                DB::statement('insert into funcionario(matricula, nome, cpf, email, password, is_admin) values (?, ?, ?, ?, ?, ?)',
                 [$funcionario['matricula'], $funcionario['nome'], $funcionario['cpf'], $funcionario['email'], $funcionario['password'], $funcionario['is_admin']]);
            }            
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
