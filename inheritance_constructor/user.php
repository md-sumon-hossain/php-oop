<?php
class User{

    #declearing private variable of an user

    private $id;
    private $name;
    private $contact;
    private $address;
    // private $title;

    # a method which is setting the user variable values
    public function setUser($id, $name, $contact, $address,){
        $this->id=$id;
        $this->name=$name;
        $this->contact=$contact;
        $this->address=$address;
        // $this->title=$title;
    }
    # a parent class constructor which will echo a group of string
    function __construct(){
        echo "parent class constructor----";
    }
    // function __jobTitle($title){
    //     $this->title=$title;
    // }
    
    # this is a method of showing output pattern 
    public function showInfo(){
        echo " $this->id ";
        echo " $this->name ";
        echo " $this->contact ";
        echo " $this->address ";
        // echo " $this->title ";
    }
}
// $user= new User();
// $user->setuser(1, "sumon",1234,"dhaka","user");
// $user->showInfo();
