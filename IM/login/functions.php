<?php

function userExists($conn, $username){
    $sql = "select * from admin_acc where username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: login.html?error=User already exists");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function login($conn, $username, $password){
    $userExists = userExists($conn, $username, $password);

    if ($userExists === false){
        header('login.php?error = userexists ');
        exit();
    }

    $pwdHashed = $userExists['password'];

    if ($password != $pwdHashed) {
        header("location: login.php?error = Password doesn't match");
        exit();
    }
    else if ($password === $pwdHashed){
        session_start();
        $_SESSION['username'] = $userExists['username'];
        header("location: ../index.php");
        exit();
    }

}

function emptyInputLogin($username, $password){
    $result=Null;

    if(empty($username) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
?>