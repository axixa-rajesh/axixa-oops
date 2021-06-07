<?php 
class Abc{
    static $x;
    public $name;
    public static function test(){
        echo Abc::$x;
    }
    public function getName(){
        echo $this->name;
    }
}
Abc::$x='Axixa';
$ob=new Abc();
$ob->name='Rajesh';
$ob->getName();
// print_r($ob);
$ob->test();
Abc::test();