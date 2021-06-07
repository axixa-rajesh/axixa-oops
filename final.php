<?php
 class Ax{
     const x='Axixa';
     public $name='Rajesh';
    final  function test()
    {
        echo Ax::x;
    }

}
class B extends Ax{

    // function test()
    // {
    //     echo "override method test";
    // }
}
echo Ax::x;
$ob=new B();
print_r($ob);
$ob->test();
# final class use for prevanting  child class 
// final class Ax{
//     function __construct()
//     {
//         echo "hello";
//     }
// }
// class B extends Ax{

// }
// $ob=new B();
?>