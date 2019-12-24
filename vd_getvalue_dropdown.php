
<?php require('mysqli_connect.php'); ?>
<?php

// php select option value from database

// $hostname = "localhost";
// $username = "root";
// $password = "";
// $databaseName = "logintest";

// // connect to mysql database

// $connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `users`";
$query1 = "SELECT `userid` FROM `users`";
// for method 1

$result1 = mysqli_query($dbcon, $query);

// for method 2

$result2 = mysqli_query($dbcon, $query1);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <!--Method One-->

        <select>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        
        <!-- Method Two -->

        <select>
            <?php echo $options;?>
        </select>

    </body>

</html>