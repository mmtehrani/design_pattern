<?php

namespace App\classes;

use App\interfaces\IShape;
/**
 *
 */
class Triangle implements IShape{

    private $base;
    private $height;
    private $sideA;
    private $sideB;

    /**
     * @param $base
     * @param $height
     */
    public function __construct($base=null,$height=null,$sideA=null,$sideB=null){
        $this->setBase($base);
        $this->setHeight($height);
        $this->setSideA($sideA);
        $this->setSideB($sideB);
    }

    /**
     * @param $height
     */
    public function setHeight($height){
        $this->height=$height;
    }

    /**
     * @param $base
     */
    public function setBase($base){
        $this->base=$base;
    }

    /**
     * @param $sideA
     */
    public function setSideA($sideA){
        $this->sideA=$sideA;
    }

    /**
     * @param $sideB
     */
    public function setSideB($sideB){
        $this->sideB=$sideB;
    }

    /**
     * @return float|int
     */
    function areaCalculator()
    {
        return ($this->base*$this->height)/2;
    }

    function perimeterCalculator()
    {
        return $this->sideA+$this->sideB+$this->base;
    }
}

