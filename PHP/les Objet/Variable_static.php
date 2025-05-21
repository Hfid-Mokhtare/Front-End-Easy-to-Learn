<?php
class Produit
{
    public static $tva = 0.2;
    public $prix;
    public function __construct($prix)
    {
        $this->prix = $prix;
    }

    public function prixTTC()
    {
        return $this->prix * (1 + static::$tva);
    }
}

echo Produit::$tva; // Affiche : 0.2
echo "<br>";

$p = new Produit(100);
echo $p->prixTTC(); //  Affiche : 120
