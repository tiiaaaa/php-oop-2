<?php 

class Product{
    protected string $name;
    // protected string $immage;
    protected string $productId;
    protected string $description;
    protected float $price;
    protected float $vote;
    protected string $reviews;
    protected float $size;
    protected string $color;
    protected bool $disponibility;

    function __construct($_name, $_productId, $_description, $_price, $_vote, $_reviews, $_size, $_color, $_disponibility){
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