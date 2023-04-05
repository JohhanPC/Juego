<?php

class Batalla{

    function batalla($jugador1, $jugador2){

        $hitBattle = $jugador1->ataque - $jugador2->defensa;
        echo "El daño a la salud de ".$jugador2->nombre." fue de ".$hitBattle."<br>";
        return $hitBattle;

    }

}

?>