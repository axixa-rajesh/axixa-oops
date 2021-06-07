<?php 
include "employee.php";
include "emp.php";
include "Sales.php";
use Salesemp\Employee;
use Salesemp\salary;
use Officeemp\Employee as OE;

$obj=new Employee();
 $obj->setDetails('Rajesh',2000000,101,'Coputer');
echo "<br>";
$obj->getDetails();

$obj2=new OE();
 $obj2->setDetails('Rakesh',500,101);
echo "<br>";
$obj2->getDetails();
$sob=new Sales\Sales();
?>