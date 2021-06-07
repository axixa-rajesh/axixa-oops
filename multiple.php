<?php 
interface A{
    function myfun();
    function funtwo();

}
interface B{
    function bmyfun();
    function bfuntwo();

}
class Parentss{

}
abstract class My extends Parentss  implements A,B{
    function myfun(){
        echo "This is my fun";
    }
}
class Child extends My{
    function funtwo(){
        echo "This is  fun two";
    }
    function bfuntwo(){
        echo "This is  fun btwo";
    }
    function bmyfun(){
        echo "This is my bfun";
    }

}
$ob= new Child();
$ob->myfun();
$ob->funtwo();