<?php

/*

@Desc Task-1:Access modifier,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/



class Fruit{
    //This property is accessed from anywhere(default)
    public $name;
    //This property is  accessed only within the class and any derived from that class
    protected $color;
    //this property can only be accessed with in the class
    private  $weight;

    function set_name($n){
        $this->name = $n;
    }
     protected function set_color($n){
        $this->name = $n;
    }
    private function set_weight($n){
        $this->name = $n;
    }
}

$myfruit = new Fruit();
$myfruit->set_name('Mango');
$myfruit->set_color('yellow');
$myfruit->set_weight(100);
?>