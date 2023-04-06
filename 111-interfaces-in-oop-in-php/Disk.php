<?php
require_once 'Figure.php';
class Disk implements Figure
{
    private $r;
    const PI = 3.14;
    public function __construct($r)
    {
        $this->r = $r;
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
