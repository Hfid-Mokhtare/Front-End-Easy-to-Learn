<?php

session_start();




$FName=$_GET["FName"];
$phone=$_GET["Number"];

$_SESSION['FName'] = $FName;
$_SESSION['Number'] = $phone;





    echo 'name is : '.$FName. '<br>';
    echo 'phone number is : ' . $phone . '<br>';




?>