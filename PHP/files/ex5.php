<?php 

 $nomFichier="myfile.txt";
function afficher10PremierLignes($nomFichier){

    $fichier=fopen($nomFichier,"r");
    $compteur=0;
    while(!feof($fichier) && $compteur<10){
        $ligne=fgets($fichier);
        echo $ligne."<br>";
        $compteur++;
    }
    fclose($fichier);
}

afficher10PremierLignes($nomFichier);

?>
