<?php

# this will call the required for the inheritance
require_once('user.php');

class Developer extends User{
    # as the developer is extending user , user has a constructor and developer has also a constructor . that's why user constructor will be overriden by the developer constructor. 

    function __construct(){
        #but if we need the base class constructor we can write the followingg code: it will call the base class constructor first whenever the object of this class is created
        parent::__construct();
        echo "developer class constructor";
    }
}
# object of the developer class
$developer=new Developer();