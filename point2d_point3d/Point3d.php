<?php


class Point3D extends Point2d
{
    public $z;

    public function __construct($_x, $_y, $_z)
    {
        parent::__construct($_x, $_y);
        $this->z = $_z;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getXYZ(){
        return [parent::getXY(),$this->z];
    }
    public function setXYZ($_x,$_y,$_z){
        parent::setXY();
        $this->z = $_z;
    }
    public function toString()
    {
        return "$this->x,$this->y,$this->z";
    }

}