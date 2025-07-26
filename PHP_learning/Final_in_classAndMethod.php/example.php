<?php 
// final in class:
final class Animal {
    public function speak() {
        echo "Animal speaks";
    }
}

// This will cause a fatal error
class Dog extends Animal {
    public function speak() {
        echo "Dog barks";
    }
}

?>



<?php
// final in method

class Vehicle {
    final public function startEngine() {
        echo "Engine started";
    }

    public function stopEngine() {
        echo "Engine stopped";
    }
}

class Car extends Vehicle {
    // This will cause a fatal error
    public function startEngine() {
        echo "Car engine started";
    }

    // This is allowed
    public function stopEngine() {
        echo "Car engine stopped";
    }
}

?>