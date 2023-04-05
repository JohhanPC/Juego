<?php

class Tanque extends TipoJugador{

    public int $defensaAdicional = 4;
    public int $ataqueAdicional = 0;

    function mostrarHabilidad(){
        Echo "La habilidad de tipo tanque es: tiene mas 4 de defensa <br>";
    }

}

?>