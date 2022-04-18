<?php
# this will call the required for the inheritance
require_once('employee.php');
class Hr extends Employee{
    # here we are defining a constructor . here hr class is extending employee class and the employee class is extending the user class. as the employee class is extending the user, both the user and employee class has a construct each . so when we are creating an object of employee class the constructor is overriding the user (base class) class constructor. and as here is a constructor it will override it's parent constructor.
    function __construct(){
        echo "hr class constructor";
    }
}
# object of the developer class
$hr= new Hr();