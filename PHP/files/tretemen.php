<?php
$nomFichier= "courses.txt";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom= trim($_POST["nom"]);
    $liste= trim($_POST["liste"]);

    $contenu="Nom: $nom".PHP_EOL;
    $contenu .="liste de courses : ".PHP_EOL;
    $contenu .=$liste.PHP_EOL;
    $contenu .=str_repeat("-",40).PHP_EOL;

    file_put_contents($nomFichier, $contenu,FILE_APPEND);
    $f=fopen($nomFichier,"r");
    echo "<h4>Contenu complet : </h4><pre>";
    readfile($nomFichier);
    readfile($nomFichier);
    echo"</pre>";

    $stat=fstat($f);
    fclose($f);

    echo"<h4>etat du fichier : </h4><ul>";
    echo"<li>Taille :".$stat['size']."</li>";
    echo"<li>Derniere modification : ".date("d/m/Y H:i:s",$stat['mtime'])."</li>";
    echo "</ul>";

}

?>
