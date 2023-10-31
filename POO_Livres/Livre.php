<?php

class Livre {
    private string $titre ;
    private int $nbPages ;
    private DateTime $parution ;
    private int $prix ;
    private Auteur $auteur ;

    // tittre nb page anne de sorite prix auteur nom et prenom

    public function __construct(string $titre, int $nbPages, string $parution, int $prix, Auteur $auteur) {
        $this->titre = $titre ;
        $this->nbPages = $nbPages ;
        $this->parution = new DateTime($parution) ;
        $this->prix = $prix ;
        $this->auteur = $auteur ;

        $this->auteur->addLivre($this) ;
    }

    //getter
    public function getTitre()
    {
        return $this->titre;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }

    public function getParution()
    {
        return $this->parution;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    
    //setter
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;
    }

    public function setParution($parution)
    {
        $this->parution = $parution;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function __toString()
    {
       return $parution;
    }

    //méthode
    public function auteurLivre() {
        // $prenomAuteur = $auteur->getPrenom() ;
        // $nomAuteur = $auteur->getPrenom() ;
        $prenomNomAuteur = $auteur->getPrenom()." ".$auteur->getPrenom();
        return $prenomNomAuteur ;
    }

    public function getLivreAge() 
    {
        $dateNow = new \DateTime("now") ;
        $DateTimeParution = $this->getParution();
        $ageLivre =  date_diff($DateTimeParution, $dateNow)->format("%Y ans") ;
        return $ageLivre ; 
    }

}



?>