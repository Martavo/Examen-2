<?php

class Jugador {
    private string $color;
    private array $recursos;

    public function __construct($color, $recursos) {
        $this->color = $color;
        $this->recursos = $recursos;
    }

    public function comprarCamino() {
        if ($this->recursos['madera'] >= 1 && $this->recursos['arcilla'] >= 1) {
            $this->recursos['madera'] -= 1;
            $this->recursos['arcilla'] -= 1;
            return "Has comprado un camino.";
        } else {
            return "No tienes suficientes recursos para comprar un camino.";
        }
    }

    public function comprarPoblado() {
        if ($this->recursos['madera'] >= 1 && $this->recursos['arcilla'] >= 1 && $this->recursos['cereales'] >= 1 && $this->recursos['lana'] >= 1) {
            $this->recursos['madera'] -= 1;
            $this->recursos['cereales'] -= 1;
            $this->recursos['arcilla'] -= 1;
            $this->recursos['lana'] -= 1;
            return "Has comprado un poblado.";
        } else {
            return "No tienes suficientes recursos para comprar un poblado.";
        }
    }

    public function comprarCiudad() {
        if ($this->recursos['roca'] >= 3 && $this->recursos['cereales'] >= 2) {
            $this->recursos['roca'] -= 3;
            $this->recursos['cereales'] -= 2;
            return "Has comprado una ciudad.";
        } else {
            return "No tienes suficientes recursos para comprar una ciudad.";
        }
    }

    public function comprarCartaDesarrollo() {
        if ($this->recursos['roca'] >= 1 && $this->recursos['cereales'] >= 1 && $this->recursos['lana'] >= 1) {
            $this->recursos['roca'] -= 1;
            $this->recursos['cereales'] -= 1;
            $this->recursos['lana'] -= 1;
            return "Has comprado una carta de desarrollo.";
        } else {
            return "No tienes suficientes recursos para comprar una carta de desarrollo.";
        }
    }

    public function mostrarRecursos(){
        return "Los recursos disponibles son: madera {$this->recursos['madera']}, roca {$this->recursos['roca']}, arcilla {$this->recursos['arcilla']}, cereales {$this->recursos['cereales']}, lana {$this->recursos['lana']}.\n";
    }
}