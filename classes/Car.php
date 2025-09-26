<?php
class Car
{
    public $brand;
    public $model;
    public $year;
    public $color;
    private $isRunning;

    public function __construct($brand, $model, $year, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->isRunning = false;
    }

    public function startEngine()
    {
        $this->isRunning = true;
        return "{$this->brand} {$this->model} engine started!";
    }

    public function stopEngine()
    {
        $this->isRunning = false;
        return "{$this->brand} {$this->model} engine stopped!";
    }

    public function getCarInfo()
    {
        return "{$this->year} {$this->brand} {$this->model} - Color: {$this->color}";
    }

    public function checkStatus()
    {
        return $this->isRunning ? "Engine is RUNNING" : "Engine is OFF";
    }
}
// Demonstration
echo "<h3>Car Class Demo</h3>";

$car1 = new Car("Toyota", "Camry", 2022, "Blue");
$car2 = new Car("Honda", "Civic", 2023, "Red");

echo $car1->getCarInfo() . "<br>";
echo $car1->startEngine() . "<br>";
echo "Status: " . $car1->checkStatus() . "<br>";
echo $car1->stopEngine() . "<br>";
echo "Status: " . $car1->checkStatus() . "<br><br>";

echo $car2->getCarInfo() . "<br>";
echo $car2->startEngine() . "<br>";
echo "Status: " . $car2->checkStatus() . "<br>";
