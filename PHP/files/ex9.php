<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Donnez votre avis sur PHP 8!</b></legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" /><br /><br />
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" /><br /><br />
            <label for="comentaire">Entrez votre commentaire sur le site :<br></label>
            <textarea name="comentaire"></textarea><br><br>
            <input type="submit" value="Envoyer" name="envoi" />
            <input type="submit" value="Afficher les avis" name="affiche" /><br />

        </fieldset>

        <?php

        $fileName = "clientfile.txt";

        function save_client_info_to_file($fileName)
        {
            if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['comentaire'])) {
                $ligne = trim($_POST['nom']) . "-";
                $ligne .= trim($_POST['email']) . "-";
                $ligne .= date('d/m/Y,h:i:s') . "-";
                $ligne .= trim($_POST['comentaire']) . PHP_EOL; // Add newline here

                $clientFile = fopen($fileName, 'a');
                if ($clientFile) {
                    fwrite($clientFile, $ligne);
                    fclose($clientFile);
                    echo "<p>Votre avis a été enregistré dans le fichier !</p><br>";
                } else {
                    echo "<p style='color: red;'>Erreur lors de l'ouverture du fichier pour l'écriture.</p><br>";
                }
            } else {
                echo "<p style='color: orange;'>Veuillez remplir tous les champs du formulaire avant d'envoyer.</p><br>";
            }
        }

        function get_client_info_from_ligne($ligne)
        {
            $parts = explode('-', trim($ligne)); // Trim the line before exploding

            if (count($parts) === 4) {
                $client_info = [
                    'name' => trim($parts[0]),
                    'email' => trim($parts[1]),
                    'date' => trim($parts[2]),
                    'comentaire' => trim($parts[3])
                ];
                return $client_info;
            } else {
                return null; // Indicate an invalid line
            }
        }

        function afficher_client_info($fileName)
        {
            $clientFile = fopen($fileName, 'r');

            if ($clientFile) {
                echo '<h2>Avis des utilisateurs:</h2>';
                echo '<table>';
                echo '<thead><tr><th>Nom</th><th>Email</th><th>Date</th><th>Commentaire</th></tr></thead>';
                echo '<tbody>';
                while (!feof($clientFile)) {
                    $ligne = fgets($clientFile);
                    $client_info = get_client_info_from_ligne($ligne);
                    if ($client_info !== null) {
                        echo '<tr><td>' . htmlspecialchars($client_info['name']) . '</td>';
                        echo '<td>' . htmlspecialchars($client_info['email']) . '</td>';
                        echo '<td>' . htmlspecialchars($client_info['date']) . '</td>';
                        echo '<td>' . htmlspecialchars($client_info['comentaire']) . '</td></tr>';
                    }
                }
                echo '</tbody>';
                echo '</table>';
                fclose($clientFile);
            } else {
                echo "<p style='color: red;'>Erreur lors de l'ouverture du fichier pour la lecture.</p><br>";
            }
        }


        if (isset($_POST['envoi'])) {
            save_client_info_to_file($fileName);
        } elseif (isset($_POST['affiche'])) {
            afficher_client_info($fileName);
        }


        ?>
    </form>
</body>

</html>
