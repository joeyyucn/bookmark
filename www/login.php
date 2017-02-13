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
    display_login_form();
    do_html_footer();
}
else if($method == "POST")
{
    $user = $_POST["user"];
    $passwd = $_POST["passwd"];

}
