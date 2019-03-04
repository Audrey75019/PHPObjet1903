<?php
require('autoloader.php');
$product1 = new Product();
$product1->setName('Hamac');

$product2 = clone $product1;

$product1->setName('Parasol');

echo '<p>' . $product2->getName() . '</p>';
echo 'coucou';

$product1 = new Product();
$product1->setName ('Hamac');
$product2 = clone $product1;
$product1->setName('Parasol');
echo $product2->getName();



