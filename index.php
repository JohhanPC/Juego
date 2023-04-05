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

$guerrero1->actualizarSalud($battleOne->batalla($tanque1, $guerrero1), $guerrero1);
$tanque1->actualizarSalud($battleOne->batalla($guerrero1, $tanque1), $tanque1);

?>