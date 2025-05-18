 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         p {
             font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         }
     </style>
 </head>

 <body>

     <input type="checkbox" id="myCheckbox" name="options[]" value="value1"> <label for="myCheckbox">Label for Checkbox 1</label><br>

     <input type="checkbox" id="anotherCheckbox" name="options[]" value="value2" checked> <label for="anotherCheckbox">Label for Checkbox 2 (Checked by default)</label><br>

     <input type="checkbox" id="thirdCheckbox" name="option3" value="value3" disabled> <label for="thirdCheckbox">Label for Checkbox 3 (Disabled)</label>


     <?php
        $arr = array("one", "tow", "three");
        $client = array("name" => "ali", "age" => 19, "work" => "programmer");
        $MDArray =
            array(
                array("name" => "Mohamed", "age" => 19, "work" => "programmer"),
                array("name" => "rida", "age" => 30, "work" => "doctor"),
                array("name" => "ayman", "age" => 25, "work" => "designer")
            );

        echo 'i use count with array : ' . count($MDArray) . '<br>';

        echo $arr[1];
        echo '<br>';
        echo print_r($arr);


        echo '<br>';
        print_r($client);
        echo '<p>-------------------------------</p>';
        echo '<p>this are our client info : </p>';
        echo '<p>client NAME :' . $client['name'] . '</p>';
        echo '<p>client AGE :' . $client['age'] . '</p>';
        echo '<p>client WORK :' . $client['work'] . '</p>';

        $counter = 1;

        do {

            echo "hello my name is Mohamed ALI $counter <br>";
            $counter++;
        } while ($counter <= 10);

        echo "<br>";

        $counter = 1;
        while ($counter <= 10) {
            echo "hello this is my whyle loop $counter <br>";
            $counter++;
        }

        echo "<br>";
        for ($i = 0; $i < 10; $i++) {
            echo "hello this is my for loop $i <br>";
        }



        ?>

     <p>-------------------------------</p>
     <p>this are our client info : </p>
     <p>client NAME : <?php echo $client['name'] ?> </p>
     <p>client AGE : <?php echo $client['age'] ?> </p>
     <p>client WORK : <?php echo $client['work'] ?> </p>


     <!-- short hand echo -->
     <p>-------------------------------</p>
     <p>this are our client info : </p>
     <p>client NAME : <?= $client['name'] ?> </p>
     <p>client AGE : <?= $client['age'] ?> </p>
     <p>client WORK : <?= $client['work'] ?> </p>


     <!-- using table-->
     <table>
         <tr>
             <th>Name</th>
             <th>Age</th>
             <th>Work</th>
         </tr>
         <tr><?= '<td>' . $MDArray[0]["name"] . '</td><td>' . $MDArray[0]["age"] . '</td><td>' . $MDArray[0]["work"] . '</td>' ?></tr>
         <tr><?= '<td>' . $MDArray[1]["name"] . '</td><td>' . $MDArray[1]["age"] . '</td><td>' . $MDArray[1]["work"] . '</td>' ?></tr>
         <tr><?= '<td>' . $MDArray[2]["name"] . '</td><td>' . $MDArray[2]["age"] . '</td><td>' . $MDArray[2]["work"] . '</td>' ?></tr>
     </table>

     <p>-----------using for/foreach loop 2-----------</p>
     <table>
         <caption>for loop</caption>
         <tr>
             <th>Name</th>
             <th>Age</th>
             <th>Work</th>
         </tr>
         <?php
            for ($i = 0; $i < count($MDArray); $i++) {
                print('<tr>
                 <td>' . $MDArray[$i]["name"] . '</td>
                 <td>' . $MDArray[$i]["age"] . '</td>
                 <td>' . $MDArray[$i]["work"] . '</td>
                 </tr> ');
            }

            ?>
     </table>
     <table>
         <caption>foreach loop 1</caption>
         <tr>
             <th>Name</th>
             <th>Age</th>
             <th>Work</th>
         </tr>
         <?php
            foreach ($MDArray as $record) {
                echo '<tr>';
                foreach ($record as $elementKey => $elementValue) {
                    echo '<td>' . $record[$elementKey] . '</td>';
                }
                echo '</tr> ';
            }

            ?>
     </table>
     <table>
         <caption>foreach loop 2</caption>
         <tr>
             <th>Name</th>
             <th>Age</th>
             <th>Work</th>
         </tr>
         <?php
            foreach ($MDArray as $record) {
                echo '<tr>';
                foreach (array_keys($record) as $key) {
                    echo '<td>' . $record[$key] . '</td>';
                }
                echo '</tr> ';
            }

            ?>
     </table>
     <table>
         <caption>foreach loop 3</caption>
         <tr>
             <th>Name</th>
             <th>Age</th>
             <th>Work</th>
         </tr>
         <?php
            foreach ($MDArray as $record) {
                echo '<tr>';
                foreach ($record as $element) {
                    echo '<td>' . $element . '</td>';
                }
                echo '</tr> ';
            }

            ?>
     </table>

     <?php


        echo "-----using switch cases------------<br>";
        $op = "+";

        switch ($op) {
            case "+":
                echo 6 + 1;
                break;
            case "-":
                echo 6 - 1;
                break;
            case "/":
                echo 6 / 1;
                break;
            case "*":
                echo 6 * 1;
                break;
            default:
                echo "no operation found";
        }


        ?>

     <form action="get.php" method="GET">
         enter Full Name : <input type="text" name="FName">
         <br>
         enter your number : <input type="text" name="Number">
         <br>
         <input type="submit">
     </form>

     <form action="post.php" method="post">
         enter your email : <input type="text" name="email">
         <br>
         enter your password : <input type="password" name="pass">
         <br>
         <input type="submit">
     </form>


     <p>----functions-------</p>

     <?php

        function print_name()
        {
            echo "Hello My name is Mohamed Ali<br>";
            echo "<b>Hello MY name is Mohamed Ali</b><br>";
        }
        print_name();
        echo "<br>";
        print_name();

        function with_parameter($one, $two)
        {
            return $one + $two;
        }

        echo with_parameter(1, 2);



        ?>





 </body>

 </html>