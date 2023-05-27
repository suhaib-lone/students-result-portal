<?php
include('config.php');
$selectedSess= $_POST['sessional'];
$roll = $_POST['roll'];
$AI = $_POST['AI'];
$BOM = $_POST['BOM'];
$net = $_POST['net'];
$ADBMS = $_POST['ADBMS'];
$MC = $_POST['MC'];
$mpmarks = $_POST['mpmarks'];
if($selectedSess=="FIRST"){
    $conn->query("INSERT IGNORE INTO sessional1(RollNo, AI, BOM, net, ADBMS, MC, mpmarks)
                VALUES('$roll','$AI','$BOM','$net','$ADBMS','$MC','$mpmarks');");
}
elseif($selectedSess=="SECOND"){
    $conn->query("INSERT IGNORE INTO sessional2(RollNo, AI, BOM, net, ADBMS, MC, mpmarks)
    VALUES('$roll','$AI','$BOM','$net','$ADBMS','$MC','$mpmarks');");
}
else{
    $conn->query("INSERT IGNORE INTO sessional3(RollNo, AI, BOM, net, ADBMS, MC, mpmarks)
    VALUES('$roll','$AI','$BOM','$net','$ADBMS','$MC','$mpmarks');");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Update</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>
    <?php
    echo '<script>
    alert("RESULT POSTED!");
    window.location.href = "studentinfo.php";
    </script>';
    ?>
</h1>

</body>
</html>