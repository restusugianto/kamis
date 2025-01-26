<?php
$objEmployeeOne = new Employee('Bob', 'Smith', 30);
echo $objEmployeeOne->getFirstName(); // prints 'Bob' 
echo $objEmployeeOne->getLastName(); // prints 'Smith' 
echo $objEmployeeOne->getAge(); // prints '30' 
$objEmployeeTwo = new Employee('John', 'Smith', 34);
echo $objEmployeeTwo->getFirstName(); // prints 'John' 
echo $objEmployeeTwo->getLastName(); // prints 'Smith' 
echo $objEmployeeTwo->getAge(); // prints '34' 
?>