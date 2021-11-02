<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Http\Controllers\Verificador;

/*
Nome: VerificadorTest (classe)
Funcionalidade: Implementas os testes da classe Verificador
Autor(es): Israel Braitt
*/
class VerificadorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testIsNumerical1 () {
        $verificador = new Verificador();
        $return = $verificador->isNumerical("098123454");
        $this->assertEquals(true, $return);
    }

}
