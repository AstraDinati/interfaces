<?php
require_once 'Figure3d.php';
class Cube implements Figure3d
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
    public function getSurfaceSquare()
    {
        return 6 * $this->a ** 2;
    }
}