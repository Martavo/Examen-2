<?php

class Jugador {
    private string $nombre;
    private int $madera;
    private int $roca;
    private int $cereales;
    private int $arcilla;
    private int $lana;

    public function __construct($nombre, $madera, $roca, $cereales, $arcilla, $lana) {
        $this->nombre = $nombre;
        $this->madera = $madera;
        $this->roca = $roca;
        $this->cereales = $cereales;
        $this->arcilla = $arcilla;
        $this->lana = $lana;
    }

    public function comprarCamino() {
        if ($this->madera >= 1 && $this->arcilla >= 1) {

            $this->madera -= 1;
            $this->arcilla -= 1;

            return "Has comprado un camino.";
        } else {
            return "No tienes suficientes recursos para comprar un camino.";
        }
    }

    public function comprarPoblado() {
        if ($this->madera >= 1 && $this->arcilla >= 1 && $this->cereales >= 1 && $this->lana >= 1) {
            
            $this->madera -= 1;
            $this->cereales -= 1;
            $this->arcilla -= 1;
            $this->lana -= 1;
            
            return "Has comprado un poblado.";
        } else {
            return "No tienes suficientes recursos para comprar un camino.";
        }
    }

    public function comprarCiudad() {
        if ($this->roca >= 3 && $this->cereales >= 2 ) {
            
            $this->roca -= 3;
            $this->cereales -= 2;

            
            return "Has comprado una ciudad.";
        } else {
            return "No tienes suficientes recursos para comprar un camino.";
        }
    }

    public function comprarCartaDesarrollo() {
        if ($this->roca >= 1 && $this->cereales >= 1 && $this->lana >= 1) {
            
            $this->roca -= 1;
            $this->cereales -= 1;
            $this->lana -= 1;
            
            return "Has comprado una carta de desarrollo.";
        } else {
            return "No tienes suficientes recursos para comprar un camino.";
        }
    }

    public function mostrarRecursos(){
        return "Los recursos disponibles son: madera {$this->madera}, roca {$this->roca}, arcilla {$this->arcilla}, cereales {$this->cereales}, lana {$this->lana}. \n ";
    }


}

?>