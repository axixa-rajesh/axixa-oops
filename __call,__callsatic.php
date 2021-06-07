<?php 
class Test{
    static function __callStatic($name, $arguments)
    {
        echo "<br>$name static method not yet define!<br>";
    }
    function __call($funname, $args)
    {
        switch($funname){
            case 'add':
                call_user_func_array([$this,'sum'],$args);
                break;
             case 'multiply': 
                call_user_func_array([$this,'multi'],$args);
                break;
                case 'sub': 
                    call_user_func_array(function(...$pera){
                        echo "<br>";
                        eval("echo ".implode('-',$pera).";");
                    },$args);
                    break;
            default: 
                echo "No such Method found<br>";    
        }

    }
    function sum(...$values){
        
        echo array_sum($values);
        echo "<br>";
    }
    function multi(...$values){
        
        echo array_product($values);
        echo "<br>";
    }
}
$ob=new Test();
$ob->sum(5,5);
$ob->add(4,3,5,2);
$ob->add(4,3,5,22,32);
$ob->multiply(4,3);
$ob->sdfds();
$ob->sub(13,2,4);
Test::xyz();
Test::myfun();
?>