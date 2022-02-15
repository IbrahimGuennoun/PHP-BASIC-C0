<?php
$prod_besteld = 12;

if($prod_besteld < 10){
    echo "€1.50";
}
elseif($prod_besteld < 20){
    echo "€1.25";
}
else($prod_besteld > 20){
    echo "€1.00";
}
