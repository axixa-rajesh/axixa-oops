<?php 
class A{
    public function myfun(){
        echo "this is my fun";

    }

}
class B extends A{
    public function myfun(){
     
        echo "<h3>this is my fun from B</h3> ";

    }
   
    public function mycall(){
        B::myfun();
        echo "<br> this is my call from B<br>";
    }
}
$object=new B;
$object->mycall();
?>
<!-- 
    classname::method();
    parent::method();
    self::method();
    $this->method();
 -->

