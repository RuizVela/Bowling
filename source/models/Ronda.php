<?php
namespace App\models;
class Ronda 
{
    public $valorPleno=10;
    private $maximoPlenos=3;
    private $restaurarPlenos=0;

    public $tirada;
    public $puntosTurno=0;
    public $puntosTotal=0;
    public $plenosSeguidos=0;

    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
    }
    function tirada()
    {
        $this->puntosTotal=$this->puntosTotal+$this->tirada;
        $this->puntosTurno=$this->tirada;
        echo $this->puntosTurno;
    }

}