<?php
include_once 'jugador.php';

$jugador = new jugador("Pedro", 4, 2, 3, 6, 5);

echo $jugador->comprarCamino() . "\n";
echo $jugador->mostrarRecursos();

echo $jugador->comprarPoblado() . "\n";
echo $jugador->mostrarRecursos();

echo $jugador->comprarCiudad() . "\n";
echo $jugador->mostrarRecursos();

echo $jugador->comprarCartaDesarrollo() . "\n";
echo $jugador->mostrarRecursos();



?>