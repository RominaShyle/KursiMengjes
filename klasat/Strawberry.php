<?php 

class Strawberry extends Fruit 

{

    private $season;

    public function __construct($name, $color, $season){
        $this->name = $name;
        $this->color = $color; 
        $this->season = $season; 
    }
    

    public function message(){

        echo "{$this->getName()}";
       
    }

    public function intro(){
        echo "<br>The fruit's name is {$this->name} and its color is
         {$this->color} and its season is {$this->season} .";


    }





}