<?php
/*

@Desc Task-1:Inheritance,commiting,pushing to git branch phpasritha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


//Inheritence  when a class is derived from another class(extend ->keyword)
    class Flower{

        public $name;
        public $color;
        public $petal;

        function __construct($name,$color,$petal){
            $this->name=$name;
            $this->color=$color;
            $this->petal=$petal;
        }

        public function intro(){
            echo " The fruit is {$this->name} and the color is {$this->color} 
            and the no of pettals are {$this->petal}.";
        }
    }
    //Here the class Mango is inherited from Flower (gets all properties of Flowers)
    class Mango extends Flower{
        public function messaage () {
            echo "extended class created";
        }
    }

    $mango = new Mango("rose","red",20);
    $mango->intro();
    $mango->messaage();
    ?>


