<?php

class jugador{
    private string $nombre;
    private int $madera;
    private int $roca;
    private int $cereales;
    private int $arcilla;
    private int $lana;

    public function __construct($nombre, $madera, $roca, $cereales, $arcilla, $lana){
        $this -> nombre = $nombre;
        $this -> madera = $madera;
        $this -> roca = $roca;
        $this -> cereales = $cereales;
        $this -> arcilla = $arcilla;
        $this -> lana = $lana;
    }

    public function getMadera(){
        return $this -> madera;
    }

    public function getRoca(){
        return $this -> roca;
    }

    public function getCereales(){
        return $this -> cereales;
    }

    public function getArcilla(){
        return $this -> arcilla;
    }

    public function getLana(){
        return $this -> lana;
    }
    


    function comprar($madera, $arcilla){

        echo "¿Que quieres comprar? (Camino, poblado, ciudad o carta de desarrollo)";
        $compra = fgets(STDIN);
        $compra = strtolower($compra);
    
        if ($compra == "camino"){
            if ($madera >= 1 && $arcilla >= 1){
                $madera = $madera -1;
                $arcilla = $arcilla -1;
                echo "Has comprado un camino";
            }else{
                echo "No tienes suficientes recursos";
            }
        }
    }

}


?>