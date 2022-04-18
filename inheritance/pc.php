<?php
# this will call the required for the inheritance
require_once('product.php');

class Pc extends product{
    protected $brand;

    public function setBrand($brand){
        $this->brand= $brand;
    }


}
$pc= new Pc(3, "laptop", 40000);
$pc->showInfo();