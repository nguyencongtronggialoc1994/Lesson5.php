<?php


class MovablePoint extends Point2d
{
    public $xs;
    public $ys;

    public function __construct($_x, $_y, $_xs, $_ys)
    {
        parent::__construct($_x, $_y);
        $this->xs = $_xs;
        $this->ys = $_ys;
    }

    public function getXs()
    {
        return $this->xs;
    }

    public function setXs($xs)
    {
        $this->xs = $xs;
    }

    public function getYs()
    {
        return $this->ys;
    }

    public function setYs($ys)
    {
        $this->ys = $ys;
    }

    public function getSpeed()
    {
        return $this->xs . $this->ys;
    }

    public function setSpeed($_xs, $_ys)
    {
        $this->xs = $_xs;
        $this->ys = $_ys;
    }

    public function toString()
    {
        return "$this->x,$this->y,$this->xs,$this->ys";
    }

    public function move()
    {
        $this->x += $this->xs;
        $this->y += $this->ys;
        return $this->x.$this->y;
    }

}