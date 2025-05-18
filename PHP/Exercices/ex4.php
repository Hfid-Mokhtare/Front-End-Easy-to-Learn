<?php

$number = 1;


while ($number<=10)  {

    if($number %3==0){

        echo $number.'<br>';
    }
    
    $number++;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Continue Check</title>
</head>
<body>

<h1>Do you want to continue?</h1>

<form method="get" action="">
    <label for="continue">Enter 'yes' to continue: </label>
    <input type="text" id="continue" name="continue"><br><br>
    <input type="submit" value="Submit">
</form>

<?php

$counter = 0;

do {
    if (isset($_GET['continue'])) {
        $answer = strtolower(trim($_GET['continue']));

        if ($answer === "yes") {
            $counter++;
            echo "<p>You entered: " . htmlspecialchars($_GET['continue']) . "</p>";
            echo "<p>Counter: " . $counter . "</p>";
            // The loop will continue as long as the form is submitted with "yes"
            // To stop, the user needs to enter something other than "yes" or not submit.
        } else {
            echo "<p>You entered: " . htmlspecialchars($_GET['continue']) . ". Stopping.</p>";
            break; // Exit the loop if the answer is not "yes"
        }
    } else {
        // This happens on the initial page load (no form submission yet)
        echo "<p>Enter 'yes' in the field and submit to continue.</p>";
    }
} while (isset($_GET['continue']) && strtolower(trim($_GET['continue'])) === "yes");

echo "<p>You said 'yes' " . $counter . " time(s).</p>";

?>





</body>
</html>


<?php 
$number=5;
for ($i=1;$i<=10;$i++)
{
    echo $number.' x '.$i.' = '.$number*$i.'<br>';
}


?>


