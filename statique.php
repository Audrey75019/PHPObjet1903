<?php
require 'autoloader.php';
var_dump(Gateau::getNbEated() . 'gateau mangé');
Gateau::$NbEated(1);
var_dump(Gateau::getNbEated() . 'gateau mangé');