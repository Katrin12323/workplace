<?php

class Animals
{
   public function makeSound()
   {

   }
}
class Cat  extends Animals
{

    public function makeSound()
    {
        echo "Meeeeooooowww";
    }
}

class Dog extends Animals
{

    public function makeSound()
    {
        echo "Wov wov";
    }
}

class Sheep extends Animals
{

    public function makeSound()
    {
        echo "Behehe behehe";
    }
}

if ($_POST['animal'] == "cat") {

     $animal = new Cat();

} elseif ($_POST['animal'] == "dog") {

     $animal = new Dog;

}  elseif($_POST['animal'] == "sheep") {

     $animal = new Sheep;
}

$animal->makeSound();