<?php


$tableux=["ali","rida","yassin"];
$nomFichier="myfile.txt";
function EcrireContenuFichier($nomFichier,$tableux){
    if (file_exists($nomFichier)){
        $contenu=implode(PHP_EOL,$tableux);
        file_put_contents($nomFichier,$contenu);
    }else{
        echo 'Erreur : le fichier '.$nomFichier.' existe pas';
    }
}

function afficherContenuFichier($nomFichier){
    if (file_exists($nomFichier)){
        $contenu=file_get_contents($nomFichier);
        echo $contenu;

    }else{
        echo 'Erreur : le fichier '.$nomFichier.' existe pas';
    }
}

EcrireContenuFichier("myfile.txt",$tableux);
afficherContenuFichier("myfile.txt");


?>
