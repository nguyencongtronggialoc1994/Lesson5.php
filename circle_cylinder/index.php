<?php
include 'Circle.php';
include 'Cylinder.php';
$circle = new Circle(5,"red");
echo $circle->getArea()."<br>";
echo $circle->color;
$cylinder = new Cylinder(5,"yellow",5);
echo $cylinder->getArea();
echo $cylinder->color;