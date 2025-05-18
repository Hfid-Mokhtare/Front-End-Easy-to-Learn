<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="user">Pleaser enter your email : </label>

        <input type="email" name="email"><br>
        <br>
        <label for="user">Pleaser enter your password : </label>
        <input type="password" name="pass"><br>
        <input type="submit">
    </form>

   



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $pass = $_POST['pass'];



        echo 'the user email is : ' . htmlspecialchars($email) . '<br>';
        echo 'the user password is : ' . str_repeat("*", strlen($pass)) . '<br>';
    }



    ?>

</body>

</html>

