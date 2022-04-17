<?php

# this will call the required for the inheritance
require_once('product.php');
class Book extends Product{
    public $name;
    public function SetBook($name){
        $this->name=$name;
    }
    public function getBook(){
        echo $this-> name;
    }

}

$book= new Book(1, "pen", 10);
$book->showInfo();

$pen= new Book(1, "pencil", 15);
$pen->setbook("abc");
$pen->showInfo();
$pen->getBook();

// $product=new Product(1, 'book', 120);
// $product->showInfo();





?>