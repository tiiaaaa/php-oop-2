<?php 
class Size{
    protected float $hight;
    protected float $width;
    protected float $lenght;

    function __construct($_hight, $_width, $_lenght)
    {
        $this->hight = $_hight;
        $this->width = $_width;
        $this->lenght = $_lenght;
    }
}

?>