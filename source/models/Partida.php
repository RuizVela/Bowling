<?php
namespace App\models;
use App\models\Ronda;
use App\models\Jugador;

class Partida
{ 
    public $maximoPlenos=3;
    public $restaurarPlenos=0;
    private $numeroRondas=10;

    function crearPlayer(){
        $player = new Jugador;
        for ($i = 1; $i <= $this->numeroRondas; $i++) {
            $ronda = new Ronda;
            echo $player->crearRonda($ronda);
        }
    }
}