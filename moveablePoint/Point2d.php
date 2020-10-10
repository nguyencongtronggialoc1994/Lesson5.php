<?php


class Point2d
{
    public $x;
    public $y;

    public function __construct($_x, $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($_x)
    {
        $this->x = $_x;
    }

    public function setY($_y)
    {
        $this->y = $_y;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function setXY($_x, $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }
}