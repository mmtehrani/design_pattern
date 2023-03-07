<?php

namespace App\classes;

use App\interfaces\IShape;

class Rectangle implements IShape{

    private $length;
    private $width;

    /**
     * @param $length
     * @param $width
     */
    public function __construct($length=null,$width=null){
        $this->setLength($length);
        $this->setWidth($width);
    }

    /**
     * @param $length
     */
    public function setLength($length){
        $this->length=$length;
    }

    /**
     * @param $width
     */
    public function setWidth($width){
        $this->width=$width;
    }

    /**
     * @return float|int
     */
    function areaCalculator()
    {
        return $this->length*$this->width;
    }

    function perimeterCalculator()
    {
        return 2*($this->length+$this->width);
    }
}
