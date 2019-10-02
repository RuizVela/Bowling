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
    public function testGuardarPuntosInterger()
    {
        $guardar = new Ronda;
        $guardar->guardarPuntos(1);
        $response = $guardar->puntosRonda;
        $expected = 1;
        $this->assertEquals($expected, $response);
        $this->assertIsInt($response);
    }
}