<?php
require_once 'iProgrammer.php';
require_once 'Employee.php';
class Programmer extends Employee implements iProgrammer 
{
    private $langs = [];
    public function getLangs()
    {
        return $this->langs;
    }
    public function addLang($lang)
    {
        $this->langs[] = $lang;
    }
}

$prog = new Programmer('John', 1000);
$prog->addLang('php');
var_dump($prog->getLangs());