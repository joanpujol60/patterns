<?php

include('poultry.php');

$pato = new Pato();
$pavo = new Pavo();
$turkey_adapter = new TurkeyAdapter($pavo);
echo "The Turkey says..."."<br>";
$pavo->gobble();
$pavo->fly();
echo "The Duck says..."."<br>";
duck_interaction($pato);
echo "The TurkeyAdapter says..."."<br>";
duck_interaction($turkey_adapter);

?>