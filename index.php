<?php
// Les inclusions
//require('Classes/Product.php');


function autoloader_perso($className){
	var_dump($className);
	require_once('Classes/' . $className . '.php');
	

}

spl_autoload_register('autoloader_perso');

echo "Bonjour";
// creation de l'objet
$hamac = new Product();
var_dump($hamac);
$hamac->name = 'Hamac';
$hamac->description = "Pour se reposer";
$hamac->price = 15.99;
var_dump($hamac);

$parasol = new Product();
$parasol->name = 'Parasol';
$parasol->description = "Pour se proteger";
$parasol->price = 150;
var_dump($parasol);


echo '<p>' . $parasol->price . '€</p>';
//appel d'une fonction
echo '<p>' . $parasol->displayPrice() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';
//affichage d'une constante
echo '<p>Nombre de vues par defaut des produits :' . $hamac::DEFAULT_NB_VIEWS . '</p>';

echo '<p>' . $parasol->displayName() . '</p>';


$voyage = new Category();
var_dump($voyage);




