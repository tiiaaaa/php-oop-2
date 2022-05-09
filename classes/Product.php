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

    function __construct($_name, $_productId, $_description, $_price, $_vote, $_reviews, Size $_size, $_color, $_disponibility = false){
        $this->name = $_name;
        $this->productId = $_productId;
        $this->description = $_description;
        $this->price = $_price;
        $this->vote = $_vote;
        $this->reviews = $_reviews;
        $this->size = $_size;
        $this->color = $_color;
        $this->disponibility = $_disponibility;
    }
}

?>