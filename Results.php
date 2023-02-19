<?php
session_start();
include('config.php');

$rollNumber = $_GET["rollNum"];
$sql = "SELECT * FROM results where RollNo='$rollNumber'";
$result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);
//$nums=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR RESULT</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="ResBox">

        <div style="font-size:20px;font-weight:bold;margin-bottom:0px;width:fit-content;display:flex">
        <p style="padding-right:20px;color:rgb(56, 55, 55);font-family: 'Roboto', sans-serif;margin-top:40px;margin-left:10px;font-weight:bold;font-size: 20px;width:fit-content;">ROLL NO: <span style="margin-left: 40px;margin-top:50px;color:#151B54;"><?php echo $row["RollNo"]; ?></span> </p>
        </div>

        <table class="resTab">

            <tr style="background-color:aqua;font-size: large;">
                <th class="_">SUBJECTS</th>
                <th class="_">MARKS</th>
            </tr>
            <tr>
                <th>IWT</th>
                <th><?php echo $row["iwtmarks"]; ?></th>
            </tr>
            <tr>
                <th>Data Mining</th>
                <th><?php echo $row["dmmarks"]; ?></th>
            </tr>
            <tr>
                <th>Wireless</th>
                <th><?php echo $row["wrmarks"]; ?></th>
            </tr>
            <tr>
                <th>JAVA</th>
                <th><?php echo $row["javamarks"]; ?></th>
            </tr>
            <tr>
                <th>E-COM</th>
                <th><?php echo $row["ecomarks"]; ?></th>
            </tr>
            <tr>
                <th>Minor Project</th>
                <th><?php echo $row["mpmarks"]; ?></th>
            </tr>

        </table>
        <div id="resOthr" style="display:flex;">
            <button onClick="location.href='home.php'" class="other" style="width:50%">HOME</button>
            <button id="another" onClick="location.href='getDetails.php'" class="other" style="width:50%;display:flex;padding:0px 10px;margin-left:40px;">CHECK ANOTHER</button>
        </div>
    </div>

</body>

</html>