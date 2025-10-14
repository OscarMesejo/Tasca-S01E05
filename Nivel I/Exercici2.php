<?php

abstract class Shape{
    public $ample;
    public $alt;

    public function __construct($ample, $alt){
        $this -> ample = $ample;
        $this -> alt = $alt;
    }


}

class Triangle extends Shape{
        public function area(){
            return (($this -> ample * $this -> alt) / 2);
        }
        
}

class Rectangle extends Shape{
    public function area(){
            return ($this -> ample * $this -> alt);
        }
}


/* vamos a pedir por consola que se introduzcan los valores */

echo "Introduce el ancho: ";
$ample = readline();
echo "Introduce la altura: ";
$alt = readline();


 $triangulo = new Triangle($ample, $alt);
 echo "El área del triángulo es : " . $triangulo -> area() . "\n"; 
 
 $rectangulo = new Rectangle($ample, $alt);
 echo "El área del rectángulo es : " . $rectangulo -> area() . "\n";

?>