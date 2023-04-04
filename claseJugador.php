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

    function saludRstante(){
        echo "El ataque afecto la salud";
    }

    function __construct()
    {
        $this->ataque = random_int(6,9);
        $this->defensa = random_int(2, 5);
        $this->salud = random_int(14,20);
    }

    function mostrarSkills(){
        echo "El ataque es de: ".$this->ataque."<br>";
        echo "La defensa es de: ".$this->defensa."<br>";
        echo "La salud es de: ".$this->salud."<br>";
    }

    function actualizarSalud(int $dañoBatalla){
        $this->salud = $this->salud - $dañoBatalla;
    }

}

?>