<?php

class compte
{

    private $montant;
    private $interet;

    public function __construct($montant, $interet)
    {
        $this->montant = $montant;
        $this->interet = $interet;
    }

    public function get_montant()
    {
        return $this->montant;
    }

    public function un_an()
    {
        // Assuming simple interest for this example
        $this->montant *= (1 + ($this->interet / 100));
    }
}
$com1 = new compte(100, 20);
$com2 = new compte(1000, 2);

echo '<form action="" method="post">';
echo '<label for="an">Entre le nombre des annes : </label>';
echo '<input type="number" name="num"/><br>';
echo '<input type="submit" name="sub" value="calculer"/></form>';

if (isset($_POST['num'])) {
  
    $an = $_POST['num'];
    for ($i = 1; $i <= $an; $i++) {
        $com1->un_an();
    }
    $montant = $com1->get_montant();
    
}

echo $montant."<br>";
