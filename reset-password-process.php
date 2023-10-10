<?php

require "MySQL.php";

$newPassword = $_POST["newPassword"];
$confirmpassword = $_POST["confirmPassword"];
$email = $_POST["email"];

if (empty($newPassword)) {
    echo("Please Enter Your New Password");
} else if (empty($confirmpassword)) {
    echo("Please Enter Your Password");

} else if ($newPassword != $confirmpassword) {
    echo("Password Doesn't match");
} else {

    $hashpassword = password_hash($newPassword, PASSWORD_DEFAULT);
    MySQL::iud("UPDATE `user` SET `password`='$hashpassword' WHERE `email`='$email' ");
    echo("Success");


}