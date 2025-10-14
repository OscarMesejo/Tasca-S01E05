<?php

abstract class Animal{
    protected $nombre;

    public function __construct($nombre){
        $this -> nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
}
    abstract public function sonido();

}
class Perro extends Animal{
    public function sonido(){
        return "Guau!";
    }

}

class Gato extends Animal{
    public function sonido(){
        return "Meow!";
    }

}

$nombrePerro = readline("Introduce el nombre del perro: ");
$nombreGato = readline("Introduce el nombre del gato: ");

$animales = [new Perro ($nombrePerro), new Gato ($nombreGato)];
foreach($animales as $animal){
    echo $animal -> getNombre() . " dice: " . $animal -> sonido() . "\n";
}
?>