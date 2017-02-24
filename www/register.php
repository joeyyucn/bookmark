<?php
/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 1:54 PM
 */
require_once("../libs/bookmark_fns.php");

$method = $_SERVER["REQUEST_METHOD"];
if($method == "GET")
{
    do_html_header("registration");
    if(is_login())
    {
        echo "already login";
    }
    else{
        display_register_form();
    }
    do_html_footer();
}
else if($method == "POST")
{
    $username = $_POST["name"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    session_start();
    try
    {
        if(!isset($username) or  !isset($password1) or !isset($password2))
        {
            throw new Exception("Form was not correctly filled.");
        }

        if($password1 != $password2)
        {
            throw new Exception("password not match");
        }

        if(strlen($password1) < MIN_PASSWOD_LEN or strlen($password1) > MAX_PASSWORD_LEN)
        {
            throw new Exception("incorrect password length");
        }

        if(!valid_username($username))
        {
            throw new Exception("invalid user name");
        }

        register(addslashes($username), addslashes($password1));
        echo "Success";
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}