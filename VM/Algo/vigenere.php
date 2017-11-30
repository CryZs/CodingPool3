<?php
function encrypt($key, $string){
	$key = strtolower($key);
	$code = "";
	$keyindex = 0;
	$keylength = strlen($key);
	$length = strlen($string);
	for ($i = 0; $i < $length; $i++){
		if (ctype_alpha($string[$i])){
			if (ctype_upper($string[$i])){
				$string[$i] = chr(((ord($key[$keyindex]) - ord("a") + ord($string[$i]) - ord("A")) % 26) + ord("A"));
            }
			else{
				$string[$i] = chr(((ord($key[$keyindex]) - ord("a") + ord($string[$i]) - ord("a")) % 26) + ord("a"));
			}
			$keyindex++;
			if ($keyindex >= $keylength){
				$keyindex = 0;
			}
		}
	}
	return $string;
}
function decrypt($key, $string){
	$key = strtolower($key);
	$code = "";
	$keyindex = 0;
	$keylength = strlen($key);
	$length = strlen($string);
	for ($i=0;$i<$length;$i++){
		if (ctype_alpha($string[$i])){
			if (ctype_upper($string[$i])){
				$x = (ord($string[$i]) - ord("A")) - (ord($key[$keyindex]) - ord("a"));
				if ($x < 0){
					$x += 26;
				}
				$x = $x + ord("A");
				$string[$i] = chr($x);
            }
			else{
				$x = (ord($string[$i]) - ord("a")) - (ord($key[$keyindex]) - ord("a"));
				if ($x < 0){
					$x += 26;
                }
				$x = $x + ord("a");
				$string[$i] = chr($x);
			}
			$keyindex++;
			if ($keyindex>=$keylength){
				$keyindex=0;
			}
		}
	}
	return $string;
}

echo encrypt("Test","Bonjour");
echo decrypt("Test","Usfchyj");
?>