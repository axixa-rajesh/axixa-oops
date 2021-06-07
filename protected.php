<?php 
class A{
    public $x,$y;
    private $z=90;
    public function myTest(){
        echo $this->z;
        echo $this->test;
 
        echo "<br>";    

    }
}
class B extends A{
    public $a,$b;
    private $z=120;
    protected $test="hello";

    public function bTest(){
        echo $this->test;
         echo $this->z;
    }

}
$ob2=new B();
print_r($ob2);
$ob2->myTest();
$ob2->bTest();
?>