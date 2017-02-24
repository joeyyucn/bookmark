<?php

/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 1:20 PM
 */
class dbConn
{
    private static $host = "10.231.12.78";
    private static $port=3306;
    private static $db="bookmark";
    private static $user="qapart";
    private static $pasword="QQQaaa000";

    public static function connect(){
        $result = new mysqli(dbConn::$host, dbConn::$user, dbConn::$pasword, dbConn::$db, dbConn::$port);
        if(!$result){
            throw new Exception("Failed connection to database");
        }
        return $result;
    }
}