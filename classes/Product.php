<?php 
include_once __DIR__ . "/classes/Size.php";

class Product{
    protected  $name;
    protected  $immage;
    protected  $productId;
    protected  $description;
    protected  $price;
    protected  $vote;
    protected  $reviews;
    protected  $size;
    protected  $color;
    protected  $disponibility;

    function __construct($_name, $_immage, $_productId, $_description, $_price, $_vote, $_reviews, Size $_size, $_color, $_disponibility = false){
        $this->name = $_name;
        $this->immage = $_immage;
        $this->productId = $_productId;
        $this->description = $_description;
        $this->price = $_price;
        $this->vote = $_vote;
        $this->reviews = $_reviews;
        $this->size = $_size;
        $this->color = $_color;
        $this->disponibility = $_disponibility;
    }

    public function getName(){
        return $this->name;
    }

    public function getImmage(){
        return $this->immage;
    }

    public function getProductId(){
        return $this->productId;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getVote(){
        return $this->vote;
    }

    public function getReviews(){
        return $this->reviews;
    }

    public function getSize(){
        return $this->size;
    }

    public function getColor(){
        return $this->color;
    }

    public function getDisponibility(){
        return $this->disponibility;
    }
}

?>