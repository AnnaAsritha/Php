<?php
/*

@Desc Task-1:Constructor and Deconstructor,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


class Packages{

    //creating a package permsg 10
    public $permsg = 10;
    //per gb = 2
    public $perGB = 25;
    public $bill;

    //function where adding 5rs as tax for every user
    public function __construct(){
        $this->bill = 5;
    }

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

    public function __destruct(){
        //this will print the output at the end deaalocate the memory
       echo $this->bill;
    }
}

$pack = new Packages();
//pack and giving message as 20 so 20*10=100+ GB 4*25 = 300(output)
$pack->permsg(20)->perGB(4)->bill;
?>