<?php 

function cesar($string,$value){
    $conv = "";
    $value%=26;
    for($i=0;$i<strlen($string);$i++){
        if (ord($string[$i])>=97 && ord($string[$i])<=122){
            $a = ord($string[$i])+$value;
            if($a>122){
                $a = 97+($a - 123);
            }
            $conv .= chr($a);
        } else if (ord($string[$i])>=65 && ord($string[$i])<=90){
            $a = ord($string[$i])+$value;
            if($a>90){
                $a = 97+($a - 123);
            }
            $conv .= chr($a);
        } else {
            $conv.=$string[$i];
        }
    }
    return $conv;
}

function de_cesar($string,$value){
    $conv = "";
    for($i=0;$i<strlen($string);$i++){
        if(ord($string[$i])>=97 && ord($string[$i])<=122){
            $a = ord($string[$i])-$value;
            if($a<97){
                $a = 123 +($a - 97);
            }
            $conv .= chr($a);
        }else if (ord($string[$i])>=65 && ord($string[$i])<=90){
            $a = ord($string[$i])-$value;
            if($a<65){
                $a = 91 +($a - 65);
            }
            $conv .= chr($a);
        }else {
            $conv.=$string[$i];
        }
        
    }
    return $conv;
}



echo cesar("remy",0)."\n";
echo cesar("REmY",3)."\n";

echo de_cesar("defabc",3)."\n";
echo de_cesar("DEFABC",3)."\n";

echo cesar("abc !! dF",3)."\n";
?>