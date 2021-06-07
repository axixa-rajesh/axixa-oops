<?php 
namespace Officeemp;
class Employee{
    public $employee_id,$name,$salary;
    public function setDetails($name,$salary,$id){
        $this->name=$name;
        $this->salary=$salary;
        $this->employee_id=$id;
        
    }
    public function getDetails(){
        foreach($this as $key =>$value){
            echo "$key = $value <br>";
        }
    }
 }
// $obj=new Employee();
// $obj->gender='Male';    



// $obj->setDetails('Rakesh',200,103,'Coputer');
// echo "<br>";
// $obj->getDetails();


// echo "<br> <hr> <br>";
// $emp2=new Employee();

// $emp2->setDetails('Rahul',70000,102,'Stock');
// echo "<br>";
// $emp2->getDetails();

?>