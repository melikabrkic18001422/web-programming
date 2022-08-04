<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input (INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$firstname =filter_input(INPUT_POST, 'firstname');
$lastname= filter_input (INPUT_POST, 'lastname');


if (!empty($username) || !empty($password) || !empty($email)
 || !empty($firstname) || !empty($lastname)) {

   $host= "localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbName="srkA9GWWZa";

   //create connection

   $conn = new mysqli ($host,$dbUsername,$dbPassword,$dbName);

   if (mysqli_connect_error()) {

     die ('Connect Error ('.mysqli_connect_errno().')'. mysqli_connect_error());
   }
   else {

     $sql= "INSERT INTO Registration (username, password, email, firstname, lastname)
     values ('$username', '$password','$email','$firstname','$lastname')";

     if ($conn -> query ($sql)) {

       echo "New record is inserted successfully";

     }
     else {

       echo "Error". $sql. "<br>".$conn -> error;
     }

     $conn -> close();


 }

 else{

 echo"Unsername should not be empty";
die();
}




?>
