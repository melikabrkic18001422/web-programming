<?php
include 'ConnectDb.php';
// get the q parameter from URL
$email = $_REQUEST["email"];
$username = $_REQUEST["username"];
$psw = $_REQUEST["psw"];
$hint = "";

$sql = "select * from users where username  ='" . $username . "'";
$result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
        $hint ="there is already a user with the same username";
        
    }
    else{
        $crypted = password_hash($psw, PASSWORD_DEFAULT);
        $sql1 = "insert into users(username,password,email,created_at) values ('". $username."','". $crypted."','". $email."',now())";
        $result1 = mysqli_query($data, $sql1);
        $hint ="Account created";
    }


echo $hint === "Account created" ?  $hint :"there is already a user with the same username";
