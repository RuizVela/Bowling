<?php
use App\models\Partida;
use App\models\Jugador;
require_once '../../vendor/autoload.php';
$partida = new Partida;
$vader = $partida->crearPlayer();
echo "<br><br><br>";
$yoda = $partida->crearPlayer();
?>