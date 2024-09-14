<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "Moo\n";
    }
}

// Demonstrating polymorphism
function makeAnimalSound(Animal $animal) {
    $animal->makeSound();
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

makeAnimalSound($dog);  // Outputs: Bark
makeAnimalSound($cat);  // Outputs: Meow
makeAnimalSound($cow);  // Outputs: Moo
?>
