<?php
$var = 2;
if($var <10 && $var>5){
    echo "het getal zit tussen 5 en 10";
}
else{
    echo "het getal zit niet tussen 5 en 10";
}

if($var <10 || $var>5){
    echo "het getal zit tussen 5 en 10";
}
else{
    echo "het getal zit niet tussen 5 en 10";
}

if($var <10 xor $var>5){
    echo "het getal zit tussen 5 en 10";
}
else{
    echo "het getal zit niet tussen 5 en 10";
}

if($var <10 ! $var>5){
    echo "het getal zit tussen 5 en 10";
}
else{
    echo "het getal zit niet tussen 5 en 10";
}