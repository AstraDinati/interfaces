<?php
require_once 'iCube.php';
class Cube implements iCube 
{
    private $a;
    public function __construct($a)
    {
        $this->a = $a;
    }  
    public function getVolume()
    {
        return $this->a ** 3;
    }
    public function getSurfaceArea()
    {
        return 6 * $this->a ** 2;
    }
}

$cube = new Cube(2);
echo $cube->getVolume();