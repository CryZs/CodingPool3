<?php
function palindrome($string){
    $string = str_replace(" ","",$string);
    echo $string;
    $isPal = false;
    $length = strlen($string)-1;
    for($i=0;$i<$length;$i++){
        $opposite = $length - $i;
        if($string[$i] == $string[$opposite]){
            $isPal = true;
        }else{
            $isPal = false;
            break;
        }
    }
    return $isPal;
}

var_dump(palindrome("Engage le jeu que je le gagne"));
?>
