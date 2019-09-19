<?php
namespace App\models;
use App\models\Ronda;
require_once '../../vendor/autoload.php';

class Partida extends Ronda
{
    function crearRonda()
    {
        $Ronda = new Ronda();
        $Ronda->tirada=rand(0, 10);
        $Ronda->tirada();
        $guardado=$Ronda->valorPleno-$Ronda->tirada;
        if ($Ronda->tirada<$Ronda->valorPleno) {
            $Ronda->tirada=rand(0, $guardado);
            echo "<br>";
            $Ronda->tirada();
        }
    }
}
