<?php
//session
session_start();

//connexiondb
include("connexion.php");
$req_select_login = "SELECT * FROM CompteProprietaire";
$statement = $connexion->prepare($req_select_login);
$statement->execute();
$login_row = $statement->fetchAll(PDO::FETCH_ASSOC);



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['login'];
    $password = $_POST['motPasse'];

    if (empty($username) && empty($password)) {

        header("Location: login.php?erreur=Veuillez saisir un login et un mot de passe");
        exit();
    } else {
        foreach ($login_row as $login) {
            if ($login['username'] == $username && $login['password'] == $password) {
                $_session["connecte"] = true;
                $_SESSION['login'] = $username;

                header("Location: accueil.php");
                exit();
            } else {

                header("Location: login.php?erreur=Erreur de login/mot de passe incorecte");
            }
        }
    }
}

/*
a.	le login ou le mot de passe est vide, il renvoie vers la page login.php avec un message erreur – Veuillez saisir un login et un mot de passe. (2pts)
b.	le login ou le mot de passe est incorrect, il renvoie vers la page login.php avec une autre erreur – Erreur de login/mot de passe. (2pts)
c.	le login et le mot de passe sont correct, il renvoie vers la page accueil.php et crée une session avec la valeur du login. (3pts)
*/
