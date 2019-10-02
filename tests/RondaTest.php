<?php 

namespace App\tests;
use App\models\Ronda;
use PHPUnit\Framework\TestCase;

class RondaTest extends TestCase {


    function testIfTiradaUnoMenorQue10()
    {
            $tirada = new Ronda;
            $tirada->tiradaUno();
            $response = $tirada->tirada;
            $expected = 10;
            $this->assertLessThanOrEqual($expected, $response);
    }
    function testIfTiradaDosMenorQue10()
    {
            $tirada = new Ronda;
            $tirada->tiradaDos();
            $response = $tirada->tirada;
            $expected = 10;
            $this->assertLessThanOrEqual($expected, $response);
    }
    function testGuardarPuntosComoNumeroEntero()
    {
        $guardar = new Ronda;
        $guardar->tiradaUno();
        $response = $guardar->puntosRonda;
        $expected = $guardar->tirada;
        $this->assertEquals($expected, $response);
        $this->assertIsInt($response);
    }
}