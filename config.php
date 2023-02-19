<?php
$name="localhost";
$uname="root";
$pwd="";
$dbname="kgpit";
$conn=new mysqli($name, $uname, $pwd, $dbname);
if(!$conn){
    echo "database not connected";

}
?>