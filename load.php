<?php
   $username1  = "root";
   $password1  = "root";
   $servername = "localhost";
   $db_name = "tanya";
   $conn = new mysqli($servername,$username1,$password1,$db_name);

  $stmt = $conn->prepare("INSERT INTO ajax (username,password) VALUES (?,?)");
  $stmt->bind_param("ss",$x,$y);
    $x =  $_POST['username'];
  $y =  $_POST['password'];
  $stmt->execute();
  var_dump($_POST);
?>