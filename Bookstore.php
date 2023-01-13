<?php

/*

@Desc inhertance,commiting,pushing to git branch phpasritha

@Author anna.asritha@covalensedigital.com

@Date 12/2/2022

*/


class Bookstore{
    public $name;
    public $book;

    function setname($name){
        $this->name = $name;
    }

    function book(){
        $this->book = $book;
    }
}

class Pen extends Bookstore{

    public $typeofpen;
    function typeofpen(){
        $this->typeofpen = $typeofpen;
    }
}

$bookstore = new Bookstore();
$bookstore->setname('pencil');
echo "The item is",$bookstore->name;
