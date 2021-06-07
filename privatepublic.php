<?php 
class Test{
    public $name,$salary;
    private $age,$mobile;
    public function __construct($name='Axixa',$salary=0,$age=null,$mobile=null){
        $this->name=$name;
        $this->salary=$salary;
        $this->age=$age;
        $this->mobile=$mobile;
    }
    private function showDetail(){
      foreach($this as $k =>$v){
          echo "<h1>$k=$v </h1>";
      }

    }
}
$ob= new Test('Rajesh','5m','32','9251435299');
print_r($ob);
echo "<br>";
echo $ob->name;
echo $ob->salary;
$ob->showDetail();
?>