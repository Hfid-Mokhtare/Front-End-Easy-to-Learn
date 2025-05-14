<?php 
function compterLignesFichier($nom_fichier){
    $lignes=file($nom_fichier);
    return count($lignes);
}

echo "le fichier test.txt comtient".compterLignesFichier("myfile.txt")."lignes";

?>
