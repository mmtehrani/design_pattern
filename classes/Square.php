<?php

namespace App\classes;

use App\interfaces\IShape;

/**
 *
 */
class Square implements IShape{
    private $side;

    /**
     * @param $side
     */
    public function __construct($side=null){
        $this->setSide($side);
    }
    /**
     * @param $side
     */
    public function setSide($side){
        $this->side=$side;
    }

    /**
     * @return float|int|object
     */
    function areaCalculator()
    {
        return pow($this->side,2);
    }

    function perimeterCalculator()
    {
        return $this->side*4;
    }
}
