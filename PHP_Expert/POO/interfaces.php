<?php
    interface Rentable {
        public function rent();
    }
    class Car implements Rentable {
        public function rent(){
            echo "Location d'une voiture...<br/>";
        }
    }
    
    class Fridge implements Rentable {
        public function rent(){
            echo "Location de frigo<br/>";
        }
    }
    
    function userRent(Rentable $thing){
        $thing->rent();
    }
    
    userRent(new Fridge());
    userRent(new Car());
    userRent(123);
?>