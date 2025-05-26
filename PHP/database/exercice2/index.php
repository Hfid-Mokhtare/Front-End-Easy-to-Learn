 <?php
session_start();
$_SESSION['const_username']="user";
$_SESSION['const_password']="1234";


    if (isset($_POST['login'])) {
        if ($_POST['username'] == $_SESSION['const_username'] && $_POST['password'] == $_SESSION['const_password']) {
            header('index.php');
        } else {    
            echo "errore";
        }
    }

    ?>