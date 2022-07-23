<?php

require_once('../connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

require_once('functions.php');

if(userExists($conn, $username) === false){


  $stmt = $conn->prepare("INSERT INTO admin_acc (username, password)
    values (?,?)");
  $stmt->bind_param("ss",$username, $password);
  $stmt ->execute();

  echo "All goods";
  header ("location: ../login.php");
  $stmt->close();
  $conn->close();
}
else {
  header ("location: ../login.php?error = Username or Password is already taken");
}
?>