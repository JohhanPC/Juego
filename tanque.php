<?php

class Tanque extends TipoJugador{

    public int $defensaAdicional = 3;
    public int $ataqueAdicional = 0;

    function mostrarHabilidad(){
        Echo "La habilidad de tipo tanque es: mas ".$this->ataqueAdicional." de ataque <br>";
        Echo "La habilidad de tipo tanque es: mas ".$this->defensaAdicional." de defensa <br>";
    }

}

?>