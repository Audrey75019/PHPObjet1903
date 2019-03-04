<?php
class Product{

const DEFAULT_NB_VIEWS = 0;
private $name;
private $description;
private $price;

public function displayPrice() {
	return 'Le prix : ' . $this->price . '€';
}
public function displayName(){
	return 'Le nom : ' . $this->name;
}
public function getname(){
	return $this->name;
}
public function setName(string $nouveauNom)
{
	$this->name = $nouveauNom;
}
public function getDescription(string $nouvelleDescription){
	return $this->description;
}
public function setDescription(string $nouvelleDescription){
	$this->description = $nouvelleDescription;
}
public function setPrice(float $price):void
{
	if($price < 0) {
		die("Le prix doit etre superieur a 0");
	}
	$this->price = $price;
}
}
