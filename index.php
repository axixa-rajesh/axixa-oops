<?php 
class YourClass{
    public $name='Rajesh';
    public $sal=200;
   function __toString()
   {
       $str=print_r($this,1);
       return $str;
   }
   function __invoke($x,$y)
   {
        $this->name=$x;
        $this->sal=$y;
       
   }
}
$ob=new YourClass();
echo $ob;
$ob('vikas','400');
echo $ob; 
?>
