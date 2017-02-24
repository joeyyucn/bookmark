<?php
/**
 * Created by PhpStorm.
 * User: jyu
 * Date: 2017/2/13
 * Time: 22:46
 */

require_once("dbConn.php");
function login($user, $password){
    $userId = null;
    $conn = dbConn::connect();
    $query = "SELECT id FROM user WHERE name='$user' AND password=PASSWORD('$password')";
    $result = $conn->query($query);
    if($result->num_rows != 0)
    {
        $userId = $result->fetch_row()[0];
        if(session_status() == PHP_SESSION_DISABLED)
        {
            session_start();
        }
        $_SESSION['USER_ID'] = $userId;
        $_SESSION['USER_NAME'] = $user;
        $result->close();
    }
    else
    {
        $result->close();
        throw new Exception("user or password is invalid");
    }
}

function is_login()
{
    return isset($_SESSION["USER_ID"]);
}

function logout()
{
    if(is_login())
    {
        unset($_SESSION["USER_ID"]);
        unset($_SESSION["USER_NAME"]);
    }
}

function register($username, $password)
{
    $conn = dbConn::connect();
    $query = "INSERT INTO user(name, password) VALUE('$username', PASSWORD('$password'))";
    $result = $conn->query($query);
    if(!$result)
    {
        throw new Exception($conn->error);
    }
}