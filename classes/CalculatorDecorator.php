<?php

namespace App\classes;

use App\interfaces\IShape;
/**
 *
 */
class CalculatorDecorator implements IShape{
    protected $shape;

    /**
     * @param IShape $shape
     */
    public function __construct(IShape $shape){
        $this->shape=$shape;
    }

    /**
     * @return mixed
     */
    public function areaCalculator(){
        return $this->shape->areaCalculator();
    }

    function perimeterCalculator()
    {
        return $this->shape->perimeterCalculator();
    }
}
