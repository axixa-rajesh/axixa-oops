<?php 
class YourClass{
    private $name;
    function __set($proname, $value)
    {
         $this->$proname=$value;
    }
    function __get($pnm)
    {
        if(isset($this->$pnm)){
            echo $this->$pnm;
        }else{
            echo "this $pnm is not exist";
        }
    }
    
}
$ob=new YourClass();
$ob->name='Rajesh';
$ob->company='Axixa';
echo $ob->salary;
echo $ob->name;
// echo "<pre>";
// print_r($ob); 