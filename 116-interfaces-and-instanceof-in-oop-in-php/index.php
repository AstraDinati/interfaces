<?php
require_once 'Figure.php';
require_once 'Figure3d.php';
require_once 'Cube.php';
require_once 'Quadrate.php';
require_once 'Rectangle.php';

$cube1 = new Cube(1);
$cube2 = new Cube(2);
$cube3 = new Cube(3);

$qua1 = new Quadrate(1);
$qua2 = new Quadrate(2);
$qua3 = new Quadrate(3);

$rec1 = new Rectangle(1,2);
$rec2 = new Rectangle(2,3);
$rec3 = new Rectangle(3,4);

$arr = [$cube1, $qua3, $rec2, $rec3, $cube2, $qua2, $cube3, $rec1, $qua1];

// foreach($arr as $obj){
//     if($obj instanceof Figure){
//         echo $obj->getSquare() . "\n";
//     }
// }

foreach($arr as $obj){
    if($obj instanceof Figure){
        echo $obj->getSquare() . "\n";
    } else { echo $obj->getSurfaceSquare() . "\n"; }
}