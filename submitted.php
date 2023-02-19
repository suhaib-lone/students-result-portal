<?php
include('config.php');
$roll = $_POST['roll'];
$iwtmarks = $_POST['iwtmarks'];
$dmmarks = $_POST['dmmarks'];
$wrmarks = $_POST['wrmarks'];
$javamarks = $_POST['javamarks'];
$ecomarks = $_POST['ecomarks'];
$mpmarks = $_POST['mpmarks'];
$conn->query("INSERT IGNORE INTO results(RollNo, iwtmarks, dmmarks, wrmarks, javamarks, ecomarks, mpmarks)
VALUES('$roll','$iwtmarks','$dmmarks','$wrmarks','$javamarks','$ecomarks','$mpmarks');");

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