<?php



if(isset($_POST['login'])){

$username= $_POST['username'];
$password= $_POST['password'];

require_once('../connection.php');
require_once('functions.php');

if(emptyInputLogin($username, $password)!== false){
    header("location: login.php?error=Empty Input");
    exit();
}
login($conn, $username, $password);
}

else {
    header('location: ../index.php');
}
