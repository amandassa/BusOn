<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use App\Models\Linha;
use Tests\TestCase;
use App\Models\Linha;
use Illuminate\Support\Facades\DB;

class LinhaTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $this->get(route('consultar_linhas'))->assertStatus(302);
        $this->get('/venderPassagens')->assertStatus(302);        
    }

    public function test_verifica_se_as_colunas_do_fillable_estao_corretas()
    {
        $linha = new Linha();
        $esperado = [
            'direta',
            'total_vagas'    
        ];
        
        $this->assertEquals($esperado, $linha->getFillable());
    }

    public function test_verifica_se_todas_as_linhas_estao_sendo_retornadas_do_BD()
    {
        $linha = new Linha();
        $obtido = $linha->getLinhas();
        $this->assertDatabaseHas('Linha',  $obtido);        
    }

