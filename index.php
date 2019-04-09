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
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            font-weight:500;

        }

        div{
            text-align: center;
            font-family: 'Mr De Haviland', cursive;
            font-size: 2.5em;
            position: relative;
            top: 80px;
            
        }

        h1{
            position: relative;
            top: 60px;
            font-weight:500; 
            font-size: 4em;

        }

        h3{
            position: relative;
            bottom: 70px;
            font-weight: 400;
            font-family: 'Cinzel', serif;


        }

        
        h5{
            position: relative;
            bottom: 100px;
            font-weight: 500;
            font-family: 'Cinzel', serif;


        }

        form{

            position: relative;
            bottom: 160px;


        }

        h2{
            text-align: center;
            position: relative;
            top: 130px;

            
        }








    </style>
    </head>
<body>

<div class="container">
    <h1> Welcome</h1>
    <h3> Amy & TJ</h3>
    <h5>June 6th 2014 <br>Please find your seat. <br> Enter your name below</h5>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    Last Name: <input type="text" name="lastname" placeholder="" maxlength="25">
    <input type="submit" onclick="submit()" >
    </form>
</div>

<script>

</script>

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

    if ($result->fetchColumn() > 0) {

        foreach ($conn->query($sql) as $row) {
            print "<h2>The " . $row['last_name'] . "'s" . "\n";
            print "table number is " . $row['table_number'] . "</div>" ."\n";
        }
    }
    // No rows matched, error message
    else {
        print "<h2>We're sorry we could not find your table</h2>";
    }
}

$res = null;
$conn = null;

?>

</body>
</html>