<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <center>
    <div id="kgpLogo">
        <img src="kgplogo.png"  height="130px" alt="KGP POLYTECHNIC COLLEGE">
        <marquee behavior="" direction="left"> <h1 style="color:maroon;">KGP IT RESULT PORTAL</h1></marquee>

    </div>

    </center>
    <div id="Admincard" class="cards">
        <h3 align="center"><span id="rescheck">Admin Panel</span></h3>
        <div id="logdiv">

            <button id="show">LOGIN</button>
        </div>
        <form action="logindata.php" onsubmit="return adminval()" method="post" name="login" id="login">
            <div class="input-parent">
                <label for="" class="loglabel">Username</label><br>
                <input type="text" name="username" class="loginputs"><br>
            </div>
            <div class="input-parent">
                <label for="" class="loglabel">Password</label><br>
                <input type="password" name="password" class="loginputs"><br>
            </div>

            <input type="submit" name="submit" value="Login" id="log">
        </form>
    </div>
    <div id="stcard" class="cards">
        <h3 align="center"><span id="rescheck">Student Panel</span></h3>
        <div id="resdiv">
            <button id="checkResult" onClick="location.href='getDetails.php'" class="other">Check Result</button>
        </div>

    </div>
    <script>
        let show=document.getElementById("show");
        let adminCard=document.getElementById("Admincard");
        let login=document.getElementById("login");
        let logdiv=document.getElementById("logdiv");
        show.addEventListener("click",function(e){
            setTimeout(function(){
                adminCard.style.height="400px";
                login.style.display = 'block';
                },500);
            logdiv.style.display="none";
            });
    </script>
    <script src="script.js"></script>

</body>

</html>