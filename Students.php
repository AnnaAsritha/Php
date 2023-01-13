<?php
/*

@Desc Task-1:Function Class,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/



class Students {
    public $name;
    public $attandence;
    public $marks;

    public function Studetails($name,$attandence,$marks){
        $this->name = $name;
        $this->attandence = $attandence;
        $this->marks =$marks;
    }
}

$class9 = new Students();
$class9->Studetails('asritha',true,99);
echo $class9->name;
echo $class9->attandence;
?>