<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            font-family: Arial, sans-serif;
            /* Use a clean sans-serif font */
            background-color: #f4f4f4;
            /* Light grey background */
            padding: 25px;
            /* Add some internal spacing */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            width: 350px;
            /* Set a fixed width */
            margin: 50px auto;
            /* Center the form on the page */
        }

        /* Style the table within the form */
        form table {
            width: 100%;
            /* Make table take full width of the form */
            border-collapse: collapse;
            /* Remove gaps between cells */
        }

        /* Style for table cells (td) */
        form td {
            padding: 10px 5px;
            /* Add padding for spacing */
            vertical-align: middle;
            /* Align content vertically in the middle */
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">

        <table>
            <tr>
                <td>user name</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>mot de passe</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="login"></td>
            </tr>

        </table>
    </form>


    <?php
   

    ?>
</body>

</html>