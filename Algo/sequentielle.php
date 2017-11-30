<?php

function searchS($value,$tab){
    for($i=0;$i<count($tab);$i++){
        if($value == $tab[$i]){
            return $i;
        }
    }
    return "Pas de correspondance. \n"; 
}
$a = [1,5,3,2,8];

echo searchS(8, $a)."\n";



?>