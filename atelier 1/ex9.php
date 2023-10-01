<?php
$nombre = 321;
if ($nombre%5==0){
    if($nombre%3==0){
        echo "$nombre est un multiple de 3 et 5";
    }
    else{
        echo "$nombre est un multiple de 5";
    }
}
else if($nombre%3==0)
echo "$nombre est un multiple de 3";
else echo "$nombre n'est un multiple de 3 nor 5 ";




?>