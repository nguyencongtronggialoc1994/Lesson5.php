<?php
include 'Point2d.php';
include 'MovablePoint.php';
$movablePoint = new MovablePoint(4,4,2,2);
$movablePoint->setSpeed(3,3);
echo $movablePoint->move();