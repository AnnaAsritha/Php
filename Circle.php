<?php
/*

@Desc Task-1:Constant,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


class Circle{
    //creating constant
    const PI = 3.14;

    public function area($radius){
        //using the constant
        return $radius *$radius  *self::PI;

    }
    
}
$circle = new Circle;
echo $circle->area(2);
?>