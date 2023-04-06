<?php
require_once 'Figure.php';
require_once 'Quadrate.php';
require_once 'Rectangle.php';
require_once 'Disk.php';

class FiguresCollection
{
    private $figures = [];
    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }
    public function getTotalSquare()
    {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }
        return $sum;
    }
    public function getTotalPerimeter()
    {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }
        return $sum;
    }
}

$figuresCollection = new FiguresCollection;


$figuresCollection->addFigure(new Quadrate(2));
$figuresCollection->addFigure(new Quadrate(3));


$figuresCollection->addFigure(new Rectangle(2, 3));
$figuresCollection->addFigure(new Rectangle(3, 4));

$figuresCollection->addFigure(new Disk(5));
$figuresCollection->addFigure(new Disk(7));

echo $figuresCollection->getTotalPerimeter() . "\n";
echo $figuresCollection->getTotalSquare();