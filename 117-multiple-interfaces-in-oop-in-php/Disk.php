<?php
require_once 'iFigure.php';
require_once 'iCircle.php';
class Disk implements iFigure, iCircle
{
    private $r;
    const PI =3.14;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getRadius()
    {
        return $this->r;
    }
    public function getDiameter()
    {
        return 2 * $this->r;
    }

    public function getSquare()
    {
        return self::PI * $this->r ** 2;
    }

    public function getPerimeter()
    {
        return 2 * self::PI * $this->r;
    }
}

$dis = new Disk(2);

echo $dis->getSquare() . "\n";
echo $dis->getDiameter() . "\n";