<?php

/*Practice Exercise 1: Create a Student class with properties: name, age, grade. Include methods to display student info and
 check if they passed (grade >= 60).*/



    Class Student {
      // Properties (attributes)
      public $name;
      public $age;
      public $grade;
      
      // construct 
      public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
      }
      
      // Method to display student information
      public function displayStudentInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
      }
      
      // Method to check if the student passed
      public function hasPassed() {
        return $this->grade >= 60;
      }
      
    }
    
    // Example Usage: instaces
    $student1 = new Student("John Smith", 15, 80);
    $student2 = new Student("Paul James", 14, 45);
    
    echo "Student 1 Information:<br>";
    $student1->displayStudentInfo();
    echo "Passed: " . ($student1->hasPassed() ? "Yes" : "No") . "<br><br>";
    
    echo "Student 2 Information:<br>";
    $student2->displayStudentInfo();
    echo "Passed: " . ($student2->hasPassed() ? "Yes" : "No") . "<br>";

?>