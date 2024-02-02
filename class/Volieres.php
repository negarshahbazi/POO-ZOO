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
                // $this->nombre = count($this->animals);

                $this->nombre++;
                return true;

            } else {
                echo "<p class='text-denger d-flex justify-content-center align-items-center'><svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi text-danger bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
                    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2'/>
                  </svg>:Cannot add the animal to this enclos because there is 6 animals already.</p>";
            }
        } else {
            echo "<p class='text-denger d-flex justify-content-center align-items-center'><svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi text-danger bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
                <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2'/>
              </svg>:This animal, is not a flying animal</p>";
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
