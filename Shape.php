<?php
/*

@Desc Task-1:lass interface,commiting,pushing to git branch phpasritha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


    //including the interface function file
    

    interface shapeinterface{
        public function getArea();
        
    }
   
    //implmenting the interface function
    class Triangle implements shapeinterface{

        public function getArea() {

                echo "triangle area is 1/2(base*height)";
        }

    }

    class rectangle implements shapeinterface{

        public function getArea() {

            echo "triangle area is length*breadth";
    }

    }
    $tri = new Triangle();
    //getting the area
    echo $tri->getArea();

    $rec = new rectangle();
    echo $rec->getArea();