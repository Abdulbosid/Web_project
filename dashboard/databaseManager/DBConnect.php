<?php
/**
 * Created by PhpStorm.
 * User: dfdf
 * Date: 28.04.2017
 * Time: 2:38
 */

namespace databaseManager;
require_once "DBConfig.php";
use \mysqli;
use \Exception;

class DBConnect
{
    private static $connection = null;

    public static function getConnection()
    {
        if(self::$connection == null){
            self::$connection = new mysqli(DBConfig::getDBHOST(), DBConfig::getDBUSERNAME(), DBConfig::getDBPASSWORD(), DBConfig::getDBNAME());
            if (mysqli_connect_errno()) {
                throw new Exception("Connection to MySQL error: " . mysqli_connect_error());
            }
        }
        return self::$connection;
    }

    public static function closeConnection()
    {
        mysqli_close(self::$connection);
    }
}
