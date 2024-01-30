<?php
class Volieres extends Enclos
{
    protected $hauteur;

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }


    public function checkCageTop()
    {
        // Implementation to check the top of the cage
        if ($this->hauteur < 12) {
            return "le hauteur n'est pas standard";
        }
    }
    public function afficherSesCaractéristiques()
    {
        $car = [];
        $car[] = $this->getHauteur();
        $car[] = $this->getPropreté();
        $car[] = $this->getNom();
        $car[] = $this->getNombre();
        return $car;
    }


    public function addAnimal(Animaux $animal)
    {
        if ($animal instanceof Aigles) {
            if ($this->nombre < 6) {
                $this->animals[] = $animal;
                $this->nombre++;
                return true;

            } else {
                echo "Cannot add the animal to this enclos because there is 6 animals already.";
            }
        } else {
            echo "This animal, is not a flying animal";
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
