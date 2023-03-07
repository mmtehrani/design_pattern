<?php


require "vendor/autoload.php";

use App\classes\{Circle,Triangle,Rectangle,Square,CalculatorDecorator};


$shape=new Circle();
$shape->setRadius(3);
//$shape=new Square();
//$shape->setSide(5);
//$shape=new Triangle();
//$shape->setSideA(4);
//$shape->setSideB(3);
//$shape->setBase(5);
//$shape->setHeight(3);
//$shape=new Rectangle();
//$shape->setLength(4);
//$shape->setWidth(5);

$client=new CalculatorDecorator($shape);
echo $client->areaCalculator();
echo "<br>";
echo $client->perimeterCalculator();

?>