<?php

require("claseJugador.php");

class Guerrero extends TipoJugador{
    
    public int $defensaAdicional = 0;
    public int $ataqueAdicional = 2;

    function mostrarHabilidad(){
        Echo "La habilidad tipo guerrero es: mas ".$this->ataqueAdicional." de ataque <br>";
        Echo "La habilidad tipo guerrero es: mas ".$this->defensaAdicional." de defensa <br>";
    }
    
} 

?>