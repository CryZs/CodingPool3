<?php 

class Car {
    const MAX_SPEED = 130;
    public $speed = 0;
    public function accelerate($value){
        $this->speed += $value;
        if ($this->speed > self::MAX_SPEED){
            $this->speed = self::MAX_SPEED;
        }
        echo "Vitesse : $this->speed km/h\n";
    }
}
$myCar = new Car();
$myCar->accelerate(50); // 50 km/h
$myCar->accelerate(50); // 100 km/h
$myCar->accelerate(50); // 130 km/h
$myCar->accelerate(50); // 130 km/h
?>