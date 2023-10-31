<?php

class Auteur {
    private string $nom ;
    private string $prenom ;
    private \DateTime $dateDeNaissance ;
    private array $livres ; 

    public function __construct(string $nom, string $prenom, string $dateDeNaissance) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->dateDeNaissance = new \DateTime($dateDeNaissance);

        $this->livres = [] ;
    }

    // getter
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    
    // setter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    //toString
    public function __toString()
    {
        $this->$livres ;
    }

    //méthode
    public function addLivre(Livre $livreObjet)
    {
        $this->livres[] = $livreObjet;
    }

    public function afficherBibliographie() 
    {
        echo "<h1> Livres de ".$this->getPrenom()." ".$this->getNom()." (".$this->getAge().")</h1>";
        foreach($this->livres as $livre) {
            echo "<p> ".$livre->getTitre()."  (".$livre->getParution()->format("Y")." / ".$livre->getLivreAge().") : ".$livre->getNbPages()." pages / ".$livre->getPrix()."&euro; </p>" ;
        } ;
    }

    public function getAge() 
    {
        $dateNow = new \DateTime("now") ;
        $DateTimeDateNaissance = $this->getDateDeNaissance();
        $age =  date_diff($DateTimeDateNaissance, $dateNow)->format("%Y ans") ;
        return $age ; 
    }
}

?>