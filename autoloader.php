<?php
// cet autoloader permet de faire les "require" des classes
//se trouvant dans le dossier "classes"
//on inclura donc ce fichier dans chaque fichier
//qui utilisera une classe se trouvant dans le dossier "classes"

function autoloader_perso($className){
	var_dump($className);
	require_once('Classes/' . $className . '.php');
	

}

spl_autoload_register('autoloader_perso');