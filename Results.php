<?php
session_start();
include('config.php');

$rollNumber = $_GET["rollNum"];
$chooseSess=$_GET["chooseSess"];
if($chooseSess=="FIRST"){
    $sql = "SELECT * FROM sessional1 where RollNo='$rollNumber'";
}
elseif($chooseSess=="SECOND"){
    $sql = "SELECT * FROM sessional2 where RollNo='$rollNumber'";
}
else{
    $sql = "SELECT * FROM sessional3 where RollNo='$rollNumber'";
}

$result = $conn->query($sql);
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
    <button id="save-txt" class="other">Download Result</button>

        <div id="ResD">
        <div style="font-size:20px;font-weight:bold;margin-bottom:0px;width:fit-content;display:flex">
        <p style="padding-right:20px;color:rgb(56, 55, 55);font-family: 'Roboto', sans-serif;margin-top:40px;margin-left:10px;font-weight:bold;font-size: 20px;width:fit-content;">ROLL NO: <span style="margin-left: 10px;margin-top:50px;font-size: 25px; color:#151B54;"><?php echo $row["RollNo"]; ?></span> </p>

        </div>
        <table class="resTab">

            <tr style="background-color:aqua;font-size: large;">
                <th class="_">SUBJECTS</th>
                <th class="_">MARKS</th>
            </tr>
            <tr>
                <th>AI</th>
                <th><?php echo $row["AI"]; ?></th>
            </tr>
            <tr>
                <th>BOM</th>
                <th><?php echo $row["BOM"]; ?></th>
            </tr>
            <tr>
                <th>net</th>
                <th><?php echo $row["net"]; ?></th>
            </tr>
            <tr>
                <th>ADBMS</th>
                <th><?php echo $row["ADBMS"]; ?></th>
            </tr>
            <tr>
                <th>MC</th>
                <th><?php echo $row["MC"]; ?></th>
            </tr>
            <tr>
                <th>Major Project</th>
                <th><?php echo $row["mpmarks"]; ?></th>
            </tr>

        </table>
        </div>

        <div id="resOthr" style="display:flex;">
            <button onClick="location.href='home.php'" class="other" style="width:50%">HOME</button>
            <button id="another" onClick="location.href='getDetails.php'" class="other" style="width:50%;display:flex;padding:0px 10px;margin-left:40px;">CHECK ANOTHER</button>

        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>