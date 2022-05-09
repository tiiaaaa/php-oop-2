<?php 

class CreditCard{

    protected $number;
    protected $expirationDate;
    protected $balance;

    function __construct($_number, $_expirationDate, $_balance){
        $this->number = $_number;
        $this->number = $_expirationDate;
        $this->number = $_balance;
    }

    /**
     * getNumber permette di recuperare il valore della variabile $number;
     * setNumber permette di 'settare' ovvero assegnare un nuovo valore alla variabile $number
     */
    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function getBalance(){
        return $this->credit_card->balance . '€';
    }
}

?>