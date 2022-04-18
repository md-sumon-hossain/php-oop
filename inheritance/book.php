<?php

# this will call the required for the inheritance
require_once('product.php');
class Book extends Product{
    
    protected $name;
    #As this is a protectecd variable , we can not just call it outside the class , as a result we need to create a public method and there we can echo the variable . then we will call the public method outside the class and then sow the output.
        # here we have set the private variable value by a publc method and get the value by another public method and then outside the class we just called the public methods.

    public function SetBook($name){
        $this->name=$name;
    }
    public function getBook(){
        echo $this-> name;
    }

}

$book= new Book(1, "eng", 10);
$book->showInfo();

$pen= new Book(1, "science", 15);

# in the following line we hae taken a variable and called a function name SetBook() in the above class. but here we have written like setbook(). but this has not generated any error in the program because php is case insensetive in the method name. but php is case sensitive in the variable name . that means we must write the variable name same.

$pen->setbook("priliminary science");
$pen->showInfo();
$pen->getBook();

// $product=new Product(1, 'book', 120);
// $product->showInfo();





?>