<?php
include 'Point2d.php';
include 'Point3d.php';
$point2d= new Point2d(4,5);
var_dump($point2d->getXY());
echo $point2d->toString()."<br>";
$point3d = new Point3D(4,5,6);
var_dump($point3d->getXYZ());
echo $point3d->toString();
