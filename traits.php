<?php 
trait Parentss{
    public $name;
    public function greating(){
        echo "Hello $this->name I am from parent trait<br>";
    }
 
}
trait P2{
    protected $name2;
    public function show(){
        echo "Hello $this->name I am from p2 trait<br>";
    }
}
class Mycls{
    use Parentss,P2;

}
$ob=new Mycls();
// print_r($ob);
$ob->name='Rajesh';
$ob->greating();
$ob->show();


?>