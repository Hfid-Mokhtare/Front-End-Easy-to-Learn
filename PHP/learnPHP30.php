<?php
function with_parameter($one, $two)
{
    return $one + $two;
}

echo 'print the function return : '.with_parameter(1, 2).'<br>';


$Date1=date('D-m-Y');
echo $Date1 . '<br>';

echo '<p>------------------------</p>';

$Date2=date('d/m/Y');
echo $Date2.'<br>';

echo '<p>------------------------</p>';

$Date3 = date('d/m/y');
echo $Date3 . '<br>';

echo '<p>------------------------</p>';

$Date4 = date('d/M/y');
echo $Date4 . '<br>';

echo '<p>------------------------</p>';

$Date5 = date('D.M.Y');
echo $Date5 . '<br>';

echo '<p>------------------------</p>';

$time1= date('H.i.s');
echo $time1.'<br>';

echo '<p>------------------------</p>';

$time1 = date('H');
echo $time1 . '<br>';

echo '<p>------------------------</p>';

$time1 = date('H:i:s');
echo $time1 . '<br>';

echo 'Date :'.date('d/m/Y').'<br>';

$name ="ali";



function printName(){
    global $name;
    echo 'the student name is : '.$name.'<br>';
}
echo printName();

include ('page1.php');
include_once('page1.php'); // to make sure that the page is including at lest one time
echo 'i include page1 sucessefuly<br>';

require 'page1.php';
require_once('page1.php');
echo 'i include page1 sucessefuly<br>';

echo '<p>----------- SESSIONS-------------</p>';

session_start();

$name= $_SESSION['FName'];
$number= $_SESSION['Number'];

echo 'the user name is :'. $name.'<br>';
echo 'the user phone Number is :' . $number . '<br>';

unset($_SESSION['FName']);

session_destroy();



?>

<p>hello</p>