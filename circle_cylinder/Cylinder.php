<?php


class Cylinder extends Circle
{
public $height;
public function __construct($_radius, $_color,$_height)
{
    parent::__construct($_radius, $_color);
    $this->height = $_height;
}
public function getRadius()
{
    return parent::getRadius();
}
public function getColor()
{
    return parent::getColor();
}
public function getHeight(){
    return $this->height;
}
public function setColor($_color)
{
    parent::setColor($_color);
}
public function setRadius($_radius)
{
    parent::setRadius($_radius);
}
public function setHeight($_height){
    $this->height = $_height;
}
public function getArea()
{
    return parent::getArea()*$this->height;
}
}