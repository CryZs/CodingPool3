<?php 
    abstract class Vehicle{
        public $owner = 'Rémy';
        
        public function forward(){
            echo "{$this->getName()} avance ...";
        }
        abstract public function getName(): string;
    }
    class Car extends Vehicle{
        public $portes = '5';
        public function getName(): string{
            return 'voiture';
        }
    }
    class Truck extends Vehicle{
        public $cargaison = 'foo';
        public function getName(): string{
            return 'camion';
        }
    }
    $peugeot306 = new Car();
    // echo $peugeot306->portes;
    // echo $peugeot306->owner;
    // echo $peugeot306->cargaison;
    $peugeot306->forward();
    $foodTruck = new Truck();
    // echo $foodTruck->owner;
    // echo $foodTruck->cargaison;
    $foodTruck->forward();
    
?>