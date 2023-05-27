<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
include('config2.php');
$userprofile = $_SESSION['login_user'];
if ($userprofile == true) {} 
else {
    header('location:home.php');
}
?>

<body style="background-color:rgb(219, 222, 227)">
    <div  class="frmDiv">

        <form id="frm" name="form" action="submitted.php" onsubmit="return validate()"  enctype="multipart/form-data" method="post">
            <p style="color:maroon; backdrop-filter: blur(30px);padding:10px;border-radius:10px 10px 0px 0px;">POST RESULTS</p>
            <div style="padding:15px;">
                <div style="background-color:antiquewhite;margin-bottom:0px;width: fit-content;border:2px solid rgb(252, 235, 215);box-shadow: 7px 2px 0px 8px rgba(252, 235, 215, 64, 0.75);">
                    <label for="roll" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">Roll Number</label>
                    <input type="number" name="roll" placeholder="eg., 20112" style="border-width:0px;border-left: 5px; ;border-style:groove;outline:none;padding:10px;background-color:rgb(236, 225, 214) ;"><br>
                    
                    <label for="sessional" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">Select Sessional:</label>
                    <select name="sessional"  style="border-width:0px;border-left: 0px; ;border-style:groove;outline:none;padding:10px;background-color:rgb(236, 225, 214) ;">
                        <option value="FIRST">FIRST</option>
                        <option value="SECOND">SECOND</option>
                        <option value="THIRD">THIRD</option>
                    </select><br>
                </div>

                <div id="subjects">
                    <div class="subjs">
                        <label for="AI" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">AI</label>
                        <input type="text" name="AI" placeholder="eg., 80/100 or 80%"><br>
                    </div>

                    <div class="subjs">
                        <label for="BOM" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">BOM</label>
                        <input type="text" name="BOM" placeholder="eg., 80/100 or 80%"><br>
                    </div>

                    <div class="subjs">
                        <label for="net" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">.NET</label>
                        <input type="text" name="net" placeholder="eg., 80/100 or 80%"><br>
                    </div>

                    <div class="subjs">
                        <label for="ADBMS" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">ADBMS</label>
                        <input type="text" name="ADBMS" placeholder="eg., 80/100 or 80%"><br>
                    </div>

                    <div class="subjs">
                        <label for="MC" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">MC</label>
                        <input type="text" name="MC" placeholder="eg., 80/100 or 80%"><br>
                    </div>

                    <div class="subjs">
                        <label for="mpmarks" style="color:rgb(22, 46, 54);font-family:sans-serif;font-weight: bold;">MAJOR PROJECT</label>
                        <input type="text" name="mpmarks" placeholder="eg., 80/100 or 80%"><br>
                    </div>


                </div>


                <input type="submit" value="Submit"  id="sub">


            </div>

        </form>
        <button id="logout" onClick="location.href='logout.php'">Logout</button>
        
    </div>
   

    <script src="script.js"></script>
</body>

</html>