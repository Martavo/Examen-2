<?php 
include_once'jugador.php';

$recursos = array(
    'madera' => 4,
    'roca' => 2,
    'cereales' => 3,
    'arcilla' => 6,
    'lana' => 5
);

$jugador = new Jugador("Azul", $recursos);

do {
    mostrarMenu();
    $opcion = trim(fgets(STDIN));

    switch($opcion){
        case 1: 
            echo $jugador->comprarCamino() . "\n";
            echo $jugador->mostrarRecursos();
            break;
        case 2: 
            echo $jugador->comprarPoblado() . "\n";
            echo $jugador->mostrarRecursos();
            break;
        case 3: 
            echo $jugador->comprarCiudad() . "\n";
            echo $jugador->mostrarRecursos();
            break;
        case 4: 
            echo $jugador->comprarCartaDesarrollo() . "\n";
            echo $jugador->mostrarRecursos();
            break;
        case 5: 
            echo $jugador->mostrarRecursos();
            break;
        case 0:
            echo "Gracias por usar la aplicación";
            break;
        default:
            echo "Opción inválida, por favor elige una opción correcta\n";
    }
} while($opcion != 0);

function mostrarMenu() {
    echo "Lista de acciones:\n";
    echo "1. Comprar camino\n";
    echo "2. Comprar poblado\n";
    echo "3. Comprar ciudad\n";
    echo "4. Comprar carta de desarrollo\n";
    echo "5. Ver recursos\n";
    echo "0. Acabar el juego\n";
}
