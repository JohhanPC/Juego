<?php

require("claseJugador.php");

class Guerrero extends TipoJugador{
    
    public int $ataqueAdicional = 2;

    function mostrarHabilidad(){
        Echo "La habilidad de tipo guerrero es: tiene mas 2 de ataque <br>";
    }
    
} 

?>