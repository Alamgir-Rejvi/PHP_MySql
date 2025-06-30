<?php

// Abstract class
abstract class Animal {
    // Abstract method (no body)
    abstract public function makeSound();

    // Regular method
    public function sleep() {
        echo "Sleeping...\n";
    }
}

// Child class
class Dog extends Animal {
    public function makeSound() {
        echo "Bark!\n";
    }
}

// Child class
class Cat extends Animal {
    public function makeSound() {
        echo "Meow!\n";
    }
}

// Usage
$dog = new Dog();
$dog->makeSound();  // Output: Bark!
$dog->sleep();      // Output: Sleeping...

$cat = new Cat();
$cat->makeSound();  // Output: Meow!

?>