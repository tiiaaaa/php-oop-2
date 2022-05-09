<?php 
class Size{
    protected  $hight;
    protected  $width;
    protected  $lenght;

    function __construct($_hight, $_width, $_lenght)
    {
        $this->hight = $_hight;
        $this->width = $_width;
        $this->lenght = $_lenght;
    }

    public function getHight(){
        return $this->hight;
    }

    public function getWidth(){
        return $this->Width;
    }

    public function getLenght(){
        return $this->lenght;
    }
}

?>