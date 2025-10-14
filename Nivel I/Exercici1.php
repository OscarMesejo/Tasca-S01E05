<?php

abstract class Animal{
    private $name;

    public function __construct($name){
        $this -> name = $name;
    }
}

class Dog extends Animal{
    public function bark(){
        return "Woof!";
    }

}

class Cat extends Animal{
    public function meow(){
        return "Meow!";
    }

}

?>