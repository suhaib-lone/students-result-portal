<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your Details</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div style="width:fit-content;" class="frmDiv">
        <form id="frm" name="Sform" action="Results.php" onsubmit="return detailVal()" enctype="multipart/form-data" style="width:300px;">
            <p style="color:maroon; backdrop-filter: blur(30px);padding:10px;border-radius: 10px 10px 0px 0px;">ENTER YOUR DETAILS</p>
            <div style="padding:15px">
                <label for="rollNum" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">Roll Number:</label><br>
                <input type="number" name="rollNum" placeholder="eg., 20112"><br>
                <label for="chooseSess" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">Select Sessional:</label><br>
                <select name="chooseSess" >
                    <option value="FIRST">FIRST</option>
                    <option value="SECOND">SECOND</option>
                    <option value="THIRD">THIRD</option>
                </select><br>
                <input type="submit" value="Submit" id="sub">
                
            </div>
        </form>
        <button onClick="location.href='home.php'" class="other hmb" style="width:100px;font-size: 16px;padding-left:25px;position:relative;left:60%;bottom:170px">HOME</button>

    </div>

    <script src="script.js"></script>
</body>

</html>