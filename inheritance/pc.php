<?php
# this will call the required for the inheritance
require_once('book.php');

class Pc extends book{
    public $brand;

    public function setBrand($brand){
        $this->brand= $brand;
    }
    public function  getBrand(){
        echo $this->brand;
    }
}
$pc= new Pc(3, "laptop", 40000);
$pc->showInfo();

$computer=new Pc(4,"desktop",45000);
$computer->setBrand("dell");
$computer->showInfo();
$computer->getBrand();


