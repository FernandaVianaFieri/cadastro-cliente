<?php
$a=5;
$b=12;
$c=7;
$d=1;
$e=-9;
$f=3;
$g=4;

$valor = ++$a + ++$b - --$c - $d-- + ++$e - $f-- + ++$g;

echo $valor=$a. "<br>";
echo $valor=$b. "<br>";
echo $valor=$c. "<br>";
echo $valor=$d. "<br>";
echo $valor=$f. "<br>";
echo $valor=$g. "<br>";

?>