<?php

/**
 * Class VoitureElectrique
 * Le voiture électrique possède de l'énergie, elle la consomme quand elle roule
 */
class VoitureElectrique extends Voiture
{
    /**
     * @var int - Energie de la voiture
     */
    private $energie;

    /**
     * Surcharge : il initialise l'énergie à 100
     * @param string $premiereMarque
     * @param string $premierMoteur
     */
    public function __construct(string $premiereMarque, string $premierMoteur)
    {

        parent::__construct($premiereMarque, $premierMoteur);
       
       

        $this->energie = 100;
    }

    /**
     * Surcharge : il perd de l'énergie en roulant
     * @param int $kilometres
     */
    public function rouler(int $kilometres): void
    {
        // On augmente les kilomètres
        $this->km = $this->km + $kilometres;
        // On perd de l'énergie
        $this->setEnergie($this->energie - $kilometres);

        // On vérifie qu'il nous reste de l'énergie pour rouler
        if($this->energie < $kilometres) {
            echo 'Plus d\'énergie';
        } else {
            // Affichage
            echo '<p>Kilométrage = '. $this->km .', énergie : '. $this->energie .'</p>';
        }
  }

    /**
     * @return int
     */
    public function getEnergie(): int
    {
        return $this->energie;
    }

    /**
     * On vérifie que l'énergie est bien entre 0 et 100 avant de la modifier
     * @param int $nouvelleEnergie
     */
    public function setEnergie(int $nouvelleEnergie): void
    {
        if ($nouvelleEnergie < 0) {
            $this->energie = 0;
        } elseif ($nouvelleEnergie > 100) {
            $this->energie = 100;
        } else {
            $this->energie = $nouvelleEnergie;
        }
    }

    /**
     * Permet d'ajouter de l'énergie à la voiture
     * @param int $recharge - Par défaut 100 (maximum)
     */
    public function recharger(int $recharge = 100): void
    {
        $this->setEnergie($this->energie + $recharge);
    }
}