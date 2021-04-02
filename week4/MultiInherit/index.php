<?php
    require_once(__DIR__ . '/People.php');

    trait Student{
        public $department;
        public $year;

        public function presentThesis(){
            echo "You need to presentation the thesis in year 4.";
        }
    }

    class RUPPStudent extends People{
        use Student;
        public function display(){
            echo "<h3>Student Information</h3>";
            echo "<li> ID: $this->id</li>" ;
            echo "<li> Name:$this->name</li>";
            echo "<li> Age: $this->age</li>";
            echo "<li> Department: $this->department</li>";
            echo "<li>Year: $this->year</li>";
        }


    }

    $dara = new RUPPStudent(1079,"Chan Dara",21);
    $dara->department = "ITE";
    $dara->year = 3;
    $dara->display();
    echo "<br>";
    $dara->presentThesis();
?>