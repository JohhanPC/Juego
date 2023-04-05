<?php

require("claseJugador.php");

class Guerrero extends TipoJugador{
    
    public int $ataqueAdicional = 2;
    public int $defensaAdicional = 0;

    function mostrarHabilidad(){
        Echo "La habilidad de tipo guerrero es: tiene mas 2 de ataque <br>";
    }
    
} 

?>