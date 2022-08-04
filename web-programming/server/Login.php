<?php
include 'ConnectDb.php';
// get the q parameter from URL
session_start();
$username = $_REQUEST["username"];
$psw = $_REQUEST["psw"];
$hint = "";

$sql = "select * from users where username  ='" . $username . "'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1){
        if(password_verify($psw, $row['password'])){
            $_SESSION["username"]=$row['username'];
            $hint="";
        }
        else{
            $hint="incorrect username or password";
        }
        
    }
    else{
        $hint="incorrect username or password";
    }

echo $hint === "incorrect username or password" ? "error" :"";
