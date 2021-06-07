<?php 
class YourClass{
    private $name;
    public $sal=200;
    function __isset($proname)
    {
        echo "$proname is really exist?";
    }
    function __unset($name)
    {
        echo "$name property already not exist. why you unset it?";
    }   
}
$ob=new YourClass();
if(isset($ob->sal)){
    echo "ok ".$ob->sal;
}
if(isset($ob->address)){
    echo "ha he";
}
unset($ob->address);
// echo "<pre>";
// print_r($ob);