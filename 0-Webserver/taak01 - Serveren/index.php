<?php
$test1 = 3;
$test2 = 6;
if($test1 == $test2){
echo "<li>gelijk</li>";
}
else{
    echo "<li>niet gelijk</li>";
}

if($test1 != $test2) {
    echo "<li>ongelijk</li>";
}
else{
    echo "<li>gelijk</li>";
}

if($test1 === $test2){
echo "<li>identiek</li>";
}
else{
    echo "<li>niet identiek</li>";
}

if($test1 > $test2){
echo "<li>test1 is groter dan test2</li>";
}
else{
    echo "<li>test1 is niet groter dan test2</li>";
}

if($test1 < $test2){
echo "<li>test1 is kleiner dan test2</li>";
}
else{
    echo "<li>test1 is niet kleiner dan test2</li>";
}

if($test1 >= $test2){
echo "<li>test1 is groter of gelijk aan test2</li>";
}
else{
    echo "<li>test1 is niet groter of gelijk aan test2</li>";
}
if($test1 <= $test2){
echo "<li>test1 is kleiner of gelijk aan test2</li>";
}
else{
    echo "<li>test1 is niet kleiner of gelijk aan test2</li>";
}

