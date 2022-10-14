<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <style>
        div{
            background-color: green;
            width: 300px;
            height: 100px;  
            text-align: center;
            
        }
    </style>

</head>
<body>
    <div id="card">
        <h1>card1</h1>
        <button onclick="check()" id="card1">available</button>
    </div><br>
    <div id="card">
        <h1>card1</h1>
    </div><br>
        <button onclick="check()" id="card2">available</button>
    </div><br>
    <div id="card">
        <h1>card1</h1>
        <button onclick="check()" id="card3">available</button>
    </div><br>
    <div id="card">
        <h1>card1</h1>
        <button onclick="check()" id="card4">available</button>
    </div><br>

        

    <!-- <script>
        function check() {
            document.getElementById("card").style.background = "blue";
        }
    </script> -->

<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "rooms";

$room305 ="305";
$room116 = "116";
$room112 = "112";
$room307 =  "307";
$room202 = "202";
$room001 = "001"; 
$room017 = "017";

{
    if($rows['name'])
}



$conn=mysqli_connect($serverName, $userName, $password, $dbName) or die("conn field");

// //$conn=mysqli_connect($room305, $room116, $room112, $room307, $room202, $room001, $room017) or die("connection field");

// if(isset($_POST) & !empty($_POST))
// {
//     $room = mysqli_rel_escape_string($conn, $_post['room']);
//     $sql="select * from rooms when room = '$userName'";
//     $result=mysqli_query($conn,$sql);
//     $count=mysqli_num_rows($result);

//     if($count>0){
//         echo '<div style="color:red;"><b>'.$userName.'</b>is not available</div>';
//     }

//     else{
//         echo '<div style="color:green;"><b>'.$userName.'</b>is available</div>';
//     }


?>
    
</body>
</html>