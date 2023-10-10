<?php
require "MySQL.php";
$vcode = $_POST["vcode"];


if(empty($vcode)){
    echo("Please Enter Your Verification Code");
}else{
     $rs =MySQL::search("SELECT * FROM `user` WHERE `verification_code` ='$vcode'");

     if($rs->num_rows==1){
         echo ("Success");
     }else{
         echo ("Invalid Verfication Code");
     }


}