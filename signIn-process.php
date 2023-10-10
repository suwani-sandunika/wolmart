<?php

require "MySQL.php";

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email)) {
    echo("Please Enter Your Email");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Invalid Email Address");
} else if (empty($password)) {
    echo("Please Enter the Password");
} else {

    $rs = MySQL::search("SELECT * FROM `user` WHERE `email`='$email' ");

    if ($rs->num_rows == 1) {
        //signIn hash password
        $user = $rs->fetch_assoc();
        if (password_verify($password, $user["password"])) {

            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["fname"] = $user["first_name"];

            echo("success");
        }else{
            echo ("Invalid Password");
        }


    } else {
        echo("Invali Email Address");

    }
}