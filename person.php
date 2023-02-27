<?php
class Person{
    private $name;
    private $email;
    public function __construct($PName, $PEmail){
        $this->name = $PName;
        $this->email = $PEmail;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setName($PName){
        $this->name = $PName;
    }

    public function setEmail($PEmail){
        $this->email = $PEmail;
    }

    public function person_info(){
      echo "Name: {$this->name}\n";
      echo "\n";
      echo "Email: {$this->email}\n";  
    }



}

?>