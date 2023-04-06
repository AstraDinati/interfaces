<?php
require_once 'iEmployee.php';
class Employee implements iEmployee
{
    private $name;
    private $age;
    private $salary;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$emp = new Employee();
$emp->setName('John');
$emp->setAge(25);
$emp->setSalary(1000);

echo $emp->getName() . "\n";
echo $emp->getAge() . "\n";
echo $emp->getSalary() . "\n";