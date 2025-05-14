<?php

$nomFichier = "myfile.txt";
$ligneTexte = "<br>hello this is a new linge";
function ajouterLigneFichier($nomFichier, $ligneTexte)
{

    $fichier = fopen($nomFichier, "a");
    fwrite($fichier,  $ligneTexte);
    fclose($fichier);
}

function afficherContenuFichier($nomFichier){
    if (file_exists($nomFichier)){
        $contenu=file_get_contents($nomFichier);
        echo $contenu;

    }else{
        echo 'Erreur : le fichier '.$nomFichier.' existe pas';
    }
}

ajouterLigneFichier($nomFichier,$ligneTexte);
afficherContenuFichier("myfile.txt");
