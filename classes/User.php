<?php

class User{

    protected $firstName;
    protected $lastName;
    protected $age;
    protected $email;
    protected $telephoneNumber;

    public function __construct($_firstName, $_lastName, $_age, $_email, $_telephoneNumber){
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->age = $_age;
        $this->email = $_email;
        $this->telephoneNumber = $_telephoneNumber;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelephoneNumber(){
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber($telephoneNumber){
        $this->telephoneNumber = $telephoneNumber;
    }

}


?>