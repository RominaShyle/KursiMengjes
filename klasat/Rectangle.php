<?php 
class Rectangle {
    
    public $a;
    private $b;

public function __construct($a=5, $b=5)
{
    $this->a = $a;
    $this->b = $b;
}


    public function set($a, $b){

        $this->a = $a;
        $this->b = $b;
    }

    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }

    public function perimeter(){
        $p = (2*$this->a) + (2*$this->b) ;
        return $p;
    }

    public function area(){

       return $this->a * $this->b;
    }


}
