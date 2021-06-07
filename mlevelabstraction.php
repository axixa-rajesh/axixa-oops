<?php 
abstract class Z{

    function ok(){
        echo "ok z";
    }
}
abstract class A extends Z{
    abstract function test();
}
abstract class B extends A{
    abstract function get();
    function test(){
        echo "This is test";
    }
}
class C extends B{
    
    function get(){
        echo "This is get";
    }
}
$ob= new C();
$ob->test();
$ob->get();
$ob->ok();
?>