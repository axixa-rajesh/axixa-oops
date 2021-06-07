<?php 
class Z{
    public function __construct()
    {
        echo "this is z constructor . . . ";
    }
    protected function get(){
        echo "this is get from Z";
    }
}
class Child extends Z{
    public function __construct()
    {
        parent::__construct();
        echo "\nthis is Child constructor . . . ";
    }
    
    public function set(){
        $this->get();
        echo "\nthis is set from child";
    }
}
$obj=new Child();
$obj->set();
?>