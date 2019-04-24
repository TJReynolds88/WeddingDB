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
            top: 60px;
            
        }

        h1{
            position: relative;
            top: 50px;
            font-weight:500; 
            font-size: 4em;

        }

        h3{
            position: relative;
            bottom: 80px;
            font-weight: 400;
            font-family: 'Cinzel', serif;


        }

        
        h5{
            position: relative;
            bottom: 120px;
            font-weight: 500;
            font-family: 'Cinzel', serif;


        }

        form{

            position: relative;
            bottom: 180px;


        }

    </style>
    </head>
<body>


<div class="container">
    <h1> Welcome</h1>
    <h3> Amy & TJ</h3>
    <h5>June 6th 2014 <br>Please find your seat. <br> Enter your name below</h5>
    <form action="code.php" onsubmit="return checkname()" method="get" name="reg">
    Last Name: <input type="text" name="lastname" placeholder="" maxlength="25">
    <input type="submit" value="Submit"> 
    </form>
</div>


<script>
function checkname(){
    var name = document.forms["reg"]["lastname"].value;
    if (name == "") {
        alert("Please Enter A Name In The Field");
  
      return false;
    }
}
        


</script>

</body>
</html>