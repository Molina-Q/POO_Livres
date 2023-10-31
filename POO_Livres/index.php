<?php
require_once "Livre.php" ;
require_once "Auteur.php" ;

$aut = new Auteur("King","Stephen", "1947-09-21") ;

$autLivre1 = new Livre("Ca","1138","1986-01-01", "20", $aut) ;
$autLivre2 = new Livre("Simetierre","374","1983-01-01", "15", $aut) ;
$autLivre3 = new Livre("Le Fléau","823","1978-01-01", "14", $aut) ;
$autLivre4 = new Livre("Shining","447","1977-01-01", "16", $aut) ;

$aut2 = new Auteur("Jean","Michel","1920-04-10") ;

$aut2Livre1 = new Livre("Poo","10","1999-01-01", "210", $aut2) ;
$aut2Livre2 = new Livre("Bonjour","85","1970-01-01", "150", $aut2) ;
$aut2Livre3 = new Livre("Ptit Fléau","263","2002-01-01", "124", $aut2) ;
$aut2Livre4 = new Livre("Briand","4","1960-01-01", "96", $aut2) ;
$aut2Livre5 = new Livre("Roman","154","1998-01-01", "321", $aut2) ;
$aut2Livre6 = new Livre("Voleur","1478","1955-01-01", "12", $aut2) ;

echo $aut->afficherBibliographie();

echo $aut2->afficherBibliographie();


?>