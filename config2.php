<?php
$servername="localhost:3308";
$user="root";
$pass="";
$db="logininfo";
$connec=new mysqli($servername,$user,$pass,$db);
if(!$connec){
    echo "Login failed";
}
?>