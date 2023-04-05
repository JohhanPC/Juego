<?php

include("guerrero.php");
include("tanque.php");
include("batalla.php");

$battleOne = new Batalla;

$guerrero1 = new Guerrero();
$guerrero1->nombre = "Thanos";
$guerrero1->mostrarSkills();
$guerrero1->mostrarHabilidad();

$tanque1 = new Tanque();
$tanque1->nombre = "Hulk";
$tanque1->mostrarSkills();
$tanque1->mostrarHabilidad();

//$batallaJugador1 = ($guerrero1->ataque + $guerrero1->ataqueAdicional) - ($tanque1->defensa + $tanque1->defensaAdicional);
//$batallaJugador2 = $tanque1->ataque - $guerrero1->defensa;

// echo "El daño a la salud de ".$tanque1->nombre." fue de ".$batallaJugador1."<br>";
// echo "El daño a la salud de ".$guerrero1->nombre." fue de ".$batallaJugador2."<br>";

//$guerrero1->actualizarSalud($batallaJugador2);


//$tanque1->actualizarSalud($batallaJugador1);


$guerrero1->actualizarSalud($battleOne->batalla($guerrero1, $tanque1), $guerrero1);
$tanque1->actualizarSalud($battleOne->batalla($tanque1, $guerrero1), $tanque1);

// echo "La salud de ".$guerrero1->nombre." es: ".$guerrero1->salud."<br>";
// echo "La salud de ".$tanque1->nombre." es: ".$tanque1->salud."<br>";

?>