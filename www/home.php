<?php
/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 5:48 PM
 */
require_once("../libs/bookmark_fns.php");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
    session_start();
    do_get();
}
?>

<?php
function do_get()
{
    if(!is_login())
    {
        header("Location:"."/login.php");
        exit;
    }

    do_html_header("HOME");
    do_html_user_menu();
    do_html_footer();
}
?>
