<?php
/**
 * Created by PhpStorm.
 * User: jyu
 * Date: 2017/2/13
 * Time: 22:22
 */
?>

<?php
function do_html_header($title){
    ?>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
<?php
}
?>

<?php
function do_html_footer(){
    ?>
</body>
</html>
<?php
}
?>

<?php
function display_login_form(){
    ?>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="user"/> </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="passwd"/> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Login"/> </td>
            </tr>
        </table>
    </form>
<?php
}
?>

<?php
function display_register_form(){
    ?>
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password1"/></td>
            </tr>
            <tr>
                <td>Repeat password:</td>
                <td><input type="password" name="password2"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"  value="register!"/> </td>
            </tr>
        </table>
    </form>
<?php
}
?>

<?php
function do_html_user_menu()
{
    ?>
    <a href="/logout.php">Logout</a><br/>
    <a href="/change_password.php">Change password</a><br/>
    <?php
}
?>
