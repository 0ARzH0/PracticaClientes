<?php namespace name;
include 'name.php';
//use name\N1;
$N1= new N1;
$N1::Hn();
echo"\n";
//use name\N2;
$N2= new N2;
$N2::Hn();

echo"\nCondicionales avanzados\n";

$p1=5;
$p2=10;
echo($p1>$p2?"Si es mayor":"No es mayor");
//ver siempre por la condicion negada al momento de condicionar con "if"

?>