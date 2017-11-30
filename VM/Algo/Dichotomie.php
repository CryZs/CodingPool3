<?php
$a = [1,2,3,4,5,6];
/*function dichotomieRec($value, $array){
    $moit = round(count($array)/2,0);
    if ($array[$moit]!== $value){
        return 0;
    }else return 0;
}*/

//function dichotomie($value, $array){
//    $a = 0;
//    $b = count($array)-1;
//    $m = ($a+$b)/2;
//    while ($a<$b){
//        if ($array[$m] == $value){
//            return $m;
//        }
//        else if ($array[$m] > $value){
//            $b = $m-1;
//        }
//        else {
//            $a = $m+1;
//        }
//    }
//    return $a;
//}

function dichotomie($value,$array){
    $length = count($array);
    $i=count($array)/2;
    if($array[$i]===$value){
        return $i;
    }
    else if (count($array)===1){
        return -1;
    }
    else if ($array[$i]>$value){
        return dichotomie($value,array_slice($array,0,$i-1));
    }
    else return dichotomie($value,array_slice($array);
}
dichotomie(6,$a);
?>