<?php
/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 4:54 PM
 */
function on_get(){
?>
    <html>
    <head>
    <title>HTML TEST</title>
    </head>
    <body>
    <form action="preg_test.php" method="post">
        <input type="text" name="pattern"/><br/>
        <input type="text" name="subject"/><br/>
        <input type="submit" name="submit"/>
    </form>
    </body>
    </html>>
<?php
        }
?>

<?php
function on_post(){
    $pattern = $_POST["pattern"];
    $subject = $_POST["subject"];
    if(isset($pattern) && isset($subject))
    {
        $match = [];
        preg_match($pattern, $subject, $match);
        var_dump($match);
    }

}
?>

<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method)
{
    case "GET":
        on_get();
        break;
    case "POST":
        on_post();
        break;
}
?>