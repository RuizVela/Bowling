<?php
use App\models\Partida;
require_once '../../vendor/autoload.php';
$partida = new Partida;?>
<table border=1px>
    <tr><td><?php
    echo "Jugador 1";
$vader = $partida->crearPlayer();
 ?></td><td><?php
 echo "Jugador 2";
$yoda = $partida->crearPlayer();
?>
</td></tr>
</table>
