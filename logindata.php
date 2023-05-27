<?php
session_start();
include('config2.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM login where ID='$username' and PASSWORD='$password' limit 1";
    $result=mysqli_query($connec,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['login_user']=$username;
        header('Location:studentInfo.php');
    }
    else{
        header('location:home.php');
    }
}
else{
    header('location:home.php');
}


?>