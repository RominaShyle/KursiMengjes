<?php


class Fruit {

    protected $name;
    public $color;

    public function __construct($name, $color){

        $this->name = $name;
        $this->color = $color; 
    }

     
    public function intro(){

    echo "<br>The fruit's name is {$this->name} and its color is {$this->color}.";

    }

    protected function getName(){

        return $this->name;
    }
}