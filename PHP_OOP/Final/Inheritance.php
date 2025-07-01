<h2>Inheritance</h2>
<?php
// basic class part : basis class
class A {
    public $name;
    public $age;
    public $salary;
    public function __construct ($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function dis (){
        echo "<h3>My Detail </h3>";
        echo "<h4> My name is : $this->name; <br> Age is :$this->age; <br> Salary is :$this->salary. </h4>";
    }
}

// derived class
class B extends A {
    public $college = "Jamea";
    public $university = "University of Chittagong";
    public function display () {
        echo "<h3>My Detail </h3>";
        echo "<h4> My name is : $this->name; <br> Age is :$this->age; <br> Salary is :$this->salary. </h4>";
        echo "My college :" .$this->college ."<br>University :" .$this->university;
    }
}
$obj = new B ("Alamgir",28,"20000");
$obj-> dis();
echo $obj -> display();
?>