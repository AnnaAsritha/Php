<?php
/*

@Desc Task-1:overriding,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


 class Car{

    public $name = "suzuki";

    public function company(){

        return "the company name is ".$this->name;
    }
 }

 class Newcar extends Car{
    //overriding the parent class functions
    public function company(){

        return parent :: company() .$this->name. "the name of company  is : TATA";
    }
 }


 $cars = new Newcar();
 echo $cars->company();