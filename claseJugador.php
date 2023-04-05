<?php

class TipoJugador {
    public int $ataque;
    public int $defensa;
    public int $salud;
    public string $nombre;
   
    function atacar(){
        echo "Esta atacando <br>";
    }

    function defender(){
        echo "Se defendio";
    }

    function daño(){
        echo "Daño recibido";
    }

    function __construct()
    {
        $this->ataque = random_int(6,9);
        $this->defensa = random_int(3, 5);
        $this->salud = random_int(14,20);
    }

    function mostrarSkills(){

        echo "Las estaditicas del jugador son: <br>";
        echo "El nombre del jugador es: ".$this->nombre."<br>";
        echo "El ataque es de: ".$this->ataque."<br>";
        echo "La defensa es de: ".$this->defensa."<br>";
        echo "La salud es de: ".$this->salud."<br>";
        
    }

    function actualizarSalud(int $dañoBatalla, $jugador){
        $this->salud = $this->salud - $dañoBatalla;
        echo "La salud de ".$jugador->nombre." ahora es de ".$jugador->salud."<br>";
    
    }


}

?>