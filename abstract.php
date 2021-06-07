<?php
abstract class Vehicle{
    public $Mname;
    public abstract function getColor();
    public abstract function setModel($mname);
    public function showDetail(){
        echo "<br> <pre>";
        print_r($this);
        echo "</pre><br>";
    }
}

class Bykes extends Vehicle{
    var $color;
    public  function getColor(){
        echo $this->color;
    }
    public  function setModel($mname){
        echo $this->Mname=$mname;
    }

}
class Car extends Vehicle{
    var $color;
    public  function getColor(){
        echo $this->color;
    }
    public  function setModel($mname){
         $this->Mname=$mname;
    }

}
$ob=new Bykes();
$ob->color='Red';
$ob->getColor();
$ob->setModel('Activa');
$ob->showDetail();
$cobj= new Car();
$cobj->color='Blue';
$cobj->getColor();
$cobj->setModel('Honda-city');
$cobj->showDetail();
