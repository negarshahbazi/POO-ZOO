<?php
class Aquariums extends Enclos
{
    protected $salinite;


    public function setSalinite($salinite)
    {
        $this->salinite = $salinite;
    }

    public function getSalinite()
    {
        return $this->salinite;
    }
    public function checkWaterSalinity()
    {
        // Implementation to check water salinity
        if (!(27 < $this->salinite && $this->salinite <= 35)) {
            return " le salinité d'eau il faut etre entre 27 et 35";
        }
    }
    public function afficherSesCaractéristiques()
    {
        $car = [];
        $car[] = $this->getSalinite();
        $car[] = $this->getPropreté();
        $car[] = $this->getNom();
        $car[] = $this->getNombre();
        return $car;
    }


    public function addAnimal(Animaux $animal)
    {
        if ($animal instanceof Poissons) {
            var_dump('test');
            if ($this->nombre < 6) {
                $this->animals[] = $animal;
                $this->nombre++;
                return true;
            } else {
                echo "Cannot add the animal to this enclos because there is 6 animals already.";
            }
        } else {
            echo "This animal, is not a water animal";
        }
    }

    public function entretenirSiEstVide()
    {
        if ($this->nombre === 0) {
            $this->setPropreté('bonne');
        }
        return $this->getPropreté();
    }
}
