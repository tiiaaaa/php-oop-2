<?php

class User{

    protected $firstName;
    protected $lastName;
    protected $age;
    protected $email;
    protected $telephoneNumber;
    protected $credit_card;
    protected $isRegistred;
    protected $discount;

    public function __construct($_firstName, $_lastName, $_age, $_email, $_telephoneNumber, $_credit_card, $_isRegistred, $_discount){
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->age = $_age;
        $this->email = $_email;
        $this->telephoneNumber = $_telephoneNumber;
        $this->creditCard = $_credit_card;
        $this->isRegistred = $_isRegistred;
        $this->discount = $_discount;
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

    public function getCreditCard(){
        return $this->credit_card;
    }

    public function setCreditCard($credit_card){
        $this->credit_card = $credit_card;
    }

    public function getIsRegistred(){
        return $this->isRegistred;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount($discount){
        $this->discount = $discount;
    }

}


?>