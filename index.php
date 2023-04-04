<?php

include("guerrero.php");
include("tanque.php");

$guerrero1 = new Guerrero();
$guerrero1->nombre = "Thanos";
echo "Nombre jugador 1 es: ".$guerrero1->nombre."<br>";
$guerrero1->mostrarSkills();
$guerrero1->mostrarHabilidad();

$tanque1 = new Tanque();
$tanque1->nombre = "Hulk";
echo "Nombre jugador 2 es: ".$tanque1->nombre."<br>";
$tanque1->mostrarSkills();
$tanque1->mostrarHabilidad();

$batallaJugador1 = ($guerrero1->ataque + $guerrero1->ataqueAdicional) - ($tanque1->defensa + $tanque1->defensaAdicional);
$batallaJugador2 = $tanque1->ataque - $guerrero1->defensa;

echo "El daño a la salud de ".$tanque1->nombre." fue de ".$batallaJugador1."<br>";
echo "El daño a la salud de ".$guerrero1->nombre." fue de ".$batallaJugador2."<br>";

$guerrero1->actualizarSalud($batallaJugador2);
echo "La salud de ".$guerrero1->nombre." es: ".$guerrero1->salud."<br>";

$tanque1->actualizarSalud($batallaJugador1);
echo "La salud de ".$tanque1->nombre." es: ".$tanque1->salud."<br>";


?>