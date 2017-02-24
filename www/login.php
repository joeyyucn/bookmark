<?php
/**
 * Created by PhpStorm.
 * User: jyu
 * Date: 2017/2/13
 * Time: 22:19
 */
require_once("../libs/bookmark_fns.php");
$method = $_SERVER["REQUEST_METHOD"];
if($method == "GET")
{
    do_html_header("Login");
    session_start();
    if(is_login())
    {
        // TODO: navigate to another page maybe .
        echo "you already login";
    }
    else{
        display_login_form();
    }

    do_html_footer();
}
else if($method == "POST")
{
    $user = $_POST["user"];
    $password = $_POST["passwd"];
    session_start();
    try
    {
        login(addslashes($user), addslashes($password));
        do_html_header("Home");
    }
    catch(Exception $e)
    {
        do_html_header("Login failed");
        echo "Failed login to server<br/>";
        echo "<a href='login.php'>login</a>";
        do_html_footer();
        exit;
    }
}
