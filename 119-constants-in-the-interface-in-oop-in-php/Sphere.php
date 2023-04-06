<?php
require_once 'iSphere.php';
class Sphere implements iSphere
{
    private $r;
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getVolume()
    {
        return (4/3) * self::PI * $this->r ** 3;
    }
    public function getSquare()
    {
        return 4 * self::PI * $this->r ** 2;
    }
}

$ball = new Sphere(4);
echo $ball->getVolume();