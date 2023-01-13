<?php
/*

@Desc Task-1:Type Hinting,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


class Book{
    public $price;
    public $author;
    //typehinting : if it ismentioned as int then the input should given as int only 
     public function price(int $price){

            $this->price = $price;
    }

    public function author(string $author){
        $this->author = $author;
    }
}

    $book = new Book();
    $book->author("asritha");
    echo $book->author;


   /* $book = new Book();
    $book->price(10);
    echo $book->price;*/