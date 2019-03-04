<?php
// Les inclusions
//require('Classes/Product.php');

require ('autoloader.php');

echo "Bonjour";
// creation de l'objet
$hamac = new Product();

$hamac->setName('Hamac');
$hamac->setDescription("Pour se reposer");
$hamac->setPrice(15.99);
var_dump($hamac);

$parasol = new Product();
$parasol->setName('Parasol');
$parasol->setDescription("Pour se proteger");
$parasol->setPrice(150);
var_dump($parasol);


// echo '<p>' . $parasol->price . '€</p>';
//appel d'une fonction
echo '<p>' . $parasol->displayPrice() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';
//affichage d'une constante
echo '<p>Nombre de vues par defaut des produits :' . $hamac::DEFAULT_NB_VIEWS . '</p>';

echo '<p>' . $parasol->displayName() . '</p>';


$voyage = new Category();
//var_dump($voyage);




