<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form style="border: 1px solid black" action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Transfaire un fichier ZIP</legend>
      <label for="file">Choisissez un fichier:</label>
      <input type="file" id="file" name="file" /><br /><br />
      <input type="submit" /><br /><br />
    </fieldset>

    <?php

    $myFileName = $_FILES['file']['name'];
    $myFileSize = $_FILES['file']['size'];

    if (isset($_FILES['file']) && ($_FILES['file']['error'] === UPLOAD_ERR_OK) ) {
      $allowed_types = ['application/zip', 'application/x-zip-compressed'];
      if (in_array($_FILES['file']['type'], $allowed_types)) {
            $myFileName = $_FILES['file']['name'];
            $myFileSize = $_FILES['file']['size'];
      echo "Vous avex bien transfaire le fichier<br><hr>";
      echo "le nom de fichier est :" . htmlspecialchars($myFileName) . "<br><hr>";
      echo "Votre fichier a une taille de  :" . htmlspecialchars($myFileSize) . "<br><hr>";
      }
      else{
        echo "<p>you have to enter a file of type zipe please</p>";
      }
    } else {
      echo "<p style='color: red;'>Erreur : Veuillez sélectionner un fichier ZIP.</p>";
    }
    ?>
  </form>
</body>

</html>
