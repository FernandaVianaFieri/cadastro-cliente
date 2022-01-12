<?php

$fibonacci[0] = 1;
$fibonacci[1] = 1;
$soma=0;

for($x=1; $soma <= 233; $x++){

$soma = $fibonacci[$x] + $fibonacci[$x-1];
$fibonacci[$x+1] = $soma;

echo $fibonacci[$x] . ", ";



}
?>