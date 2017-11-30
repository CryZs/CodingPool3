<?php 
/*class Test {
    public $hello = "Rémy";
    public function sayHello(){return "bonjour";}
}

$test = new Test();
echo "Hello {$test->sayHello()} \n";
*/


/* ======= FOR EACH ======= */

/*$a = [1,2,3];

$copy = array_map(function ($value){
    return $value * -1;    
},$a);
/*
foreach ($a as $elem){
    echo $elem."\n";
}

$user = [
    'fullname' => 'Rémy Vast',
    'age' => '20',
];
foreach ($user as $key => $value){
    echo "$key = $value\n";
}

foreach ($user as &$value){
    $value .= "updated";
}
var_dump($copy);

$list = [1,345,65,-23,-1,10,1,2];
$filter = array_filter($list, function($value){
    return $value > 1;
});

var_dump($filter);

*/
/*
$trilist = [1,5,3,2,8];
function myswap(&$a, &$b){
    $c=$b;
    $b=$a;
    $a=$c;
}
for($i=0;$i<count($trilist)-1;$i++){
    for($j=$i+1;$j<count($trilist);$j++){
        if($trilist[$i]>$trilist[$j]){
            myswap($trilist[$i],$trilist[$j]);
        }
    }
}

var_dump($trilist);

*/

abstract class Vehicule{
    abstract function forward();
    function turn(){
        echo "Je tourne..";
    }
}

class Car extends Vehicule{
    public $model;
    public $brand;
    private $owner;
    public function forward(){
        echo "La voiture $this->brand $this->model avance ...\n";
    }
    public function turn(){
        parent::turn();
        echo " donc je tourne le volant. PTDR\n";
    }
    public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }
}
$peugeot = new Car();
$peugeot->brand = "Peugeot";
$peugeot->model = "207";

$renault = new Car();
$renault->brand = "Renault";
$renault->model = "Clio";

$peugeot->forward();
$renault->setModel("Audi");
echo $renault->getModel()."\n";

echo $peugeot->turn();

?>
