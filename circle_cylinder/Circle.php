<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($_radius, $_color)
    {
        $this->radius = $_radius;
        $this->color = $_color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($_radius)
    {
        $this->radius = $_radius;
    }

    public function setColor($_color)
    {
        $this->color = $_color;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}