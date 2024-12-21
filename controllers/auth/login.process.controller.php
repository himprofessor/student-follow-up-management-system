<?php

require "models/auth/auth.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = login($email);
    if (!empty($user)){
        if (password_verify($password, $user['password'])){
            $_SESSION["username"] = $user["username"];
            $_SESSION["password"] = $user["password"];
            header("Location: /");
        }else{
            $_SESSION["wrong-pwd"] = "Password is incorrect, Please try again.";
            header("Location: /login");
        }
    }
}else{
    $_SESSION["user-not-found"] = "User not found!";
    header("Location: /login");
}