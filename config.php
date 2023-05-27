<?php

$name="localhost:3308";
$uname="root";
$pwd="";
$dbname="kgpit";
$conn=new mysqli($name, $uname, $pwd, $dbname);
if(!$conn){
    echo "database not connected";

}
?>