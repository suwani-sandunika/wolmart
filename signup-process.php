<?php 


require "MySQL.php";

$email = $_POST["email"];
$password = $_POST["password"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];

 if(empty($email)){
    echo("Please Enter Your Email");

 }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo("Invalid Email Address");
 }else if (empty($password)){
    echo ("Please Enter Your Password");
 }else if (strlen($password)<3){
    echo ("Password must contain at least 3 characters");

 }else if (empty($fname)){
    echo ("Please Enter Your First Name");
 }else if (empty($lname)){
    echo ("Please Enter Your Last Name");
 } else if(empty($mobile)){
    echo("Please Enter Your Mobile Number");

 }
 
 
 else if(strlen($mobile)!=10){
    echo("Mobile Number must contain 10 characters");


 }
 else if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}+/" ,$mobile)==0){
    echo ("Invalid Mobile Number");

 }else {
   $userRs = MySQL::search("SELECT * FROM `user` WHERE `email`='$email'");

if($userRs->num_rows==1){
    echo ("User already Registerd With the Provided Email");
}else {
//    password hash
    $hashedPasssword =password_hash($password , PASSWORD_DEFAULT);

    MySQL::iud("INSERT INTO `user` (`first_name` , `last_name` , `email` , `mobile` , `password` , `status_id`) VALUES ('$fname' , '$lname' ,'$email' ,'$mobile', '$hashedPasssword', '1')");

session_start();
$_SESSION["email"]= $email ;
$_SESSION["fname"]= $fname ;

    echo("success");
}

 }



?>