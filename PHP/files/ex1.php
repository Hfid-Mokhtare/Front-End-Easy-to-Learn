<?php
$nomFichier="myfile.txt";
function afficherContenuFichier($nomFichier){
    if (file_exists($nomFichier)){
        $contenu=file_get_contents($nomFichier);
        echo $contenu;

    }else{
        echo 'Erreur : le fichier '.$nomFichier.' existe pas';
    }
}
afficherContenuFichier("myfile.txt");


?>
