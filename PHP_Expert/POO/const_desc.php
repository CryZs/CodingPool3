<?php
    class Foo{
        public $name;
        public function __construct($name){
            $this->name = $name;
            echo "<p>Création de l'objet $this->name</p>";
        }
        public function __destruct(){
            echo "<p>Destruction de l'objet $this->name</p>"; 
        }
    }
    echo '<p>START</p>';
    
    $foo1 = new Foo('foo1');
    $foo2 = new Foo('foo2');
    
    echo '<p>BEFORE UNSET </p>';
    
    unset($foo2);
    
    echo '<p>END</p>';
?>