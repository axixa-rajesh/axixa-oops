<?php 
namespace Salesemp;
class Employee{
    public $employee_id,$name,$salary,$department;
    public function setDetails($name,$salary,$id,$dpt){
        $this->name=$name;
        $this->salary=$salary;
        $this->employee_id=$id;
        $this->department=$dpt;
    }
    public function getDetails(){
        foreach($this as $key =>$value){
            echo "$key = $value <br>";
        }
    }
}
class salary{
    
}
// $obj=new Employee();
// $obj->gender='Male';    



// $obj->setDetails('Rajesh',2000000,101,'Coputer');
// echo "<br>";
// $obj->getDetails();


// echo "<br> <hr> <br>";
// $emp2=new Employee();

// $emp2->setDetails('Rahul',70000,102,'Stock');
// echo "<br>";
// $emp2->getDetails();

?>