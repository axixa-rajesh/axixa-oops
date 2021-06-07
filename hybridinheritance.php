<?php 
interface A{
    const x='test';
    function afun();
}
interface B {
    function bfun();

}
interface C extends A,B{
    function cfun();

}
class My implements C{
    function afun(){
        echo "A ka fun";
    }
    function bfun(){
        echo "B ka fun";
    }
    function cfun(){
        echo "c ka fun";
    }
    

}
$ob=new My();
$ob->afun();
$ob->bfun();
$ob->cfun();
?>