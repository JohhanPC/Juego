<?php

class Batalla{

    function batalla($jugador1, $jugador2){

        $hitBattle = ($jugador1->ataque + $jugador1->ataqueAdicional) - ($jugador2->defensa + $jugador2->defensaAdicional);
        echo "El daño a la salud de ".$jugador2->nombre." fue de ".$hitBattle."<br>";
        return $hitBattle;

    }

}

?>