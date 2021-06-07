<?php 
class Axixa{
    public $name,$salary;
    public function getDetail(){
        $this->gender='male';
        //print_r($this);

        echo "Name= ",$this->name;
        echo "<br>";
        echo "Salary=" ,$this->salary;
        echo "<br>";
    }
}
$x=new Axixa();

$x->name='Rajiv';
$x->salary="400";
$x->getDetail();
echo $x->gender;
$y=new Axixa();
$y->name='Nisha';
// echo $y->gender;
$y->getDetail();
$num='gender';
echo $y->{$num};
?>
<!-- 

    $name $salary
 -->