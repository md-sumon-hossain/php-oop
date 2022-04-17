<?php
# a class which is considered as a base class . we will extend this class whenever we need it

class Product{
    protected $id;
    protected $title;
    protected $prirce;

    # a php constructor with multiple parameters
    function __construct($id, $title,$price){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    # this is a function by which we can set the values of the given variables
    public function setProduct($id, $title, $price){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    # this method is used to set up a format to show the value
    public function showInfo(){
        echo " ---- Product Info---<br>";
        echo "id: {$this->id} <br>";
        echo "Title: {$this->title} <br>";
        echo "price: {$this->price} <br>";
   }

}

?>