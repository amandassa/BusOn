<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrechoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get(route('funcionarioLoginfront'))->assertStatus(200);
        $this->get(route('adicionarTrecho'))->assertStatus(302); // Página encontrada

    }
}
