<?php
define("USER", "root");
define("PASS", "root");
define("BD", "store");
define("SERVER", "localhost");

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "store";
    private static $dbUsername = "root";
    private static $dbUserpassword = "root";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}

?>