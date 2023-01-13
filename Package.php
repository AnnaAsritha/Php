<?php
/*

@Desc Task-1:method chaining,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


    class Package{

        //creating a package permsg 10
        public $permsg = 10;
        //per gb = 2
        public $perGB = 25;
        public $bill;

        //function for permsg
        public function permsg($message)//$message->how many ,msgs as input
        {
            //here add the mesage into the bill and the message used * 10(permsg)
            $this->bill += $this->permsg * $message;
            return $this;
        }

        public function perGB($GB)//$GB->how many ,msgs as input
        {
            //here add the GB into the bill and the message used * 25(perGB)
            $this->bill += $this->perGB * $GB;
            return $this;
        }
    }

    $pack = new Package();
    //pack and giving message as 20 so 20*10=100+ GB N4*25 = 300(output)
    echo $pack->permsg(20)->perGB(4)->bill;
    ?>