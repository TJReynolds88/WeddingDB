





<!DOCTYPE html>
<html>
    <head>
        <title> Amy & TJ Wedding </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Cinzel|Mr+De+Haviland');

        body{
            margin:0;
            padding:0;
            background-image: url('table.jpg');
            background-repeat: no-repeat;
            background-position: center;
            font-weight:500;

        }

        div{
            text-align: center;
            font-family: 'Mr De Haviland', cursive;
            font-size: 2.5em;

            
        }

        h1{


            font-weight:500; 
            font-size: 3em;

        }
        
        h2{
            position: relative;
            bottom: 50px;
            left: 15px;
            font-weight:500; 
            font-size: 3em;
        }

        h3{
            position: relative;
            font-weight: 400;
            font-family: 'Cinzel', serif;
            bottom: 50px;

        }
        h4{
            position: relative;
            bottom: 100px;
            left: 15px;
            font-weight:500; 
            font-size: 1.5em;

        }

        
        h5{
            position: relative;
            bottom: 110px;
            font-weight: 500;
            font-family: 'Cinzel', serif;


        }


    </style>
    </head>
<body>


<?php

require_once "../../../db_connect.php";

// Get user input of last name and sanitize
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $lastname = test_input($_GET["lastname"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$sql = "SELECT * FROM `members` WHERE last_name = '$lastname'";

//Check for last name
if ($result = $conn->query($sql)) {
?>


<div class="container">
    <?php
       if ($result->fetchColumn() > 0) {

        foreach ($conn->query($sql) as $row) {
                print "<h1> Table </h1>";
                print "<h2>". $row['table_number'] . "</h2>";
            }
    }
        
        // No rows matched, error message
        else {
            print "<h1>Sorry</h1>";
            echo nl2br("<h4> We could \n not find your  \r\n table </h4>");
        }
}

    
    $res = null;
    $conn = null;
    ?>
    <h3> Amy & TJ</h3>
    <h5>June 6th 2014</h5>
</div>

</body>
</html>
























