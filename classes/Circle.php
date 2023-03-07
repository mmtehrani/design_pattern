<?php

namespace App\classes;

use App\interfaces\IShape;
/***
 *
 */
class Circle implements IShape{
    private $pi=3.14;
    private $radius;

    /**
     * @param $radius
     */
    public function __construct($radius=null){
        $this->setRadius($radius);
    }

    /**
     * @param $radius
     */
    public function setRadius($radius){
        $this->radius=$radius;
    }

    /**
     * @return float|int
     */
    function areaCalculator()
    {
        return $this->pi*pow($this->radius,2);
    }

    function perimeterCalculator()
    {
        return 2*$this->pi*$this->radius;
    }
}


