<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


class Car
    {

        // Properties (attributes)
        public $brand;
        public $color;
        public $year;

        // Constructor - runs when object is created
        public function __construct($brand, $color, $year)
        {
            $this->brand = $brand;
            $this->color = $color;
            $this->year = $year;
        }

        // Methods (Functiions)
        public function start()
        {
            return "The {$this->brand} car is starting...";
        }

        public function getInfo()
        {
            return "This is attributes {$this->year} {$this->color} {$this->brand}";
        }
    }

    // Creaating objects (instance)
    $car1 = new Car("Toyota", "Red", 2020);
    $car2 = new Car("BMW", "Blue", 2023);

    echo $car1->start();
    echo $car2->getInfo();


    ?>
</body>

</html>