<?php 

namespace App\tests;
use App\models\Ronda;
use App\models\Jugador;
use PHPUnit\Framework\TestCase;

class RondaTest extends TestCase {


    public function testIfTirarMenorQue10()
    {
            $tirada = new Ronda;
            $tirada->tiradaUno();
            $response = $tirada->tirada;
            $expected = 10;
            $this->assertLessThanOrEqual($expected, $response);
    }

}