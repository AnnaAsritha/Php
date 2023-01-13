<?php
/*

@Desc Task-1:Class,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


//class Student is created with three properties
class Student{
   public $name = 'asritha';//string
   public $marks = 89;//int
    public $attadance = true;//boolean
}

//for class student new instance is created
$class10 = new Student();
echo $class10->name ;
echo "<br>";
//the value cane be edited here also
echo $class10 ->marks = 99;
echo "<br>";
echo $class10 ->attadance;