<?php
class MySQL{
 private static $connection ;

private static $host = "localhost";

 private static $userName = "root" ;

 private static $password = "Suwi@2002" ;

 private static $dbName = "wolmart_db" ;


 private static $port = "3306" ;


private static function setUpConnection(){
   if(!isset(MySQL::$connection)){
    MySQL::$connection =  new mysqli(MySQL::$host , MySQL::$userName , MySQL::$password , MySQL::$dbName , MySQL::$port);

   }
    }


public static function search($query){

    MySQL::setUpConnection();

    return MySQL::$connection->query($query);

}

public static function iud($query){
    MySQL::setUpConnection();
    MySQL::$connection->query($query);
}
    
}






?>