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
        $rondaInicial = new Ronda();
        $player = new Jugador($rondaInicial);
        for ($i = 1; $i <= $this->numeroRondas; $i++) {
            $ronda = new Ronda;
            echo $player->nuevaRonda($ronda);
        }
    }
}