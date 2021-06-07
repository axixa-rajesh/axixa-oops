<?php 
class Abc{
    public $name,$salary;
    public function __construct($n='RAJESH',$s=12000){
        $this->name=$n;
        $this->salary=$s;
    }
    
    public function setValue($n,$s){
        $this->name=$n;
        $this->salary=$s;
    }
    public function __destruct()
    {
        echo "$this->name<h1>I am destructor</h1>";
    }
    
}
$myobj=new Abc();
print_r($myobj);
$myobj->setValue('Neha',23000);
print_r($myobj);
unset($myobj);
echo "<br><hr><br>";
$myobj2=new Abc('Richa');
print_r($myobj2);
$myobj2->setValue('Nehu',23000);
print_r($myobj2);
echo "<br><hr><br>";
$myobj3=new Abc('Richa',16000);
print_r($myobj3);
$myobj3->setValue('Nehudi',23000);
print_r($myobj3);
echo "<br><hr><br>";
$myobj4=new Abc(s:19000);
print_r($myobj4);
$myobj4->setValue('Neno',23000);
print_r($myobj4);
?>