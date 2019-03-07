<?php
class Gateau
{
	public static $nbReady = 0;
	public static function getNbEated(int $nb): int {
		return self::$nbEated;
	}

	public static function setNbEated(int $nb): void{
		self::$nbEated = self::$nbEated + $nb;
	}
	public function __construct(string)
}