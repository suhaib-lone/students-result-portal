<?php
$servername="localhost";
$user="root";
$pass="";
$db="logininfo";
$connec=new mysqli($servername,$user,$pass,$db);
if(!$connec){
    echo "Login failed";
}
?>