<?php
class A{
    public $name;
}

class B extends A{
    var $age;
}
class C extends A{
    public $gender;
}
class D extends A{
    public $city;
    
}
$ob=new C();
print_r($ob);
############# mulit-level 
// class A{
//     public $name;
// }

// class B extends A{
//     var $age;
// }
// class C extends B{
//     public $gender;
// }
// class D extends C{
//     public $city,$name;
    
// }
// $ob=new D();
// print_r($ob);