<?php 

namespace App\tests;
use App\models\Jugador;
use App\models\Ronda;
use PHPUnit\Framework\TestCase;

class JugadorTest extends TestCase
{
    function testIfRestaurarPlenosEstablecePlenosSeguidos0()
    {
        $jugador = new Jugador;
        $jugador->restaurarPlenos();
        $response= $jugador->plenosSeguidos;
        $expected = 0;
        $this->assertEquals($response,$expected);
    }
    public function testGuardarPuntosComoNumeroEntero()
    {
        $ronda = new Ronda;
        $guardar = new Jugador;
        $guardar->crearRonda($ronda);
        $response = $guardar->puntosPartida;
        $expected = $ronda->puntosRonda;
        $this->assertEquals($expected, $response);
        $this->assertIsInt($response);
    }
}