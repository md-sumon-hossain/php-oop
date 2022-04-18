<?php

# this will call the required for the inheritance
require_once('user.php');

class Employee extends User{
    # as the employee is extending user , user has a constructor and employee has also a constructor . that's why user constructor will be overriden by the employee constructor. 
    function __construct(){
            echo "employee class constructor   ";
        }
}
# object of the developer class
$employee= new Employee();