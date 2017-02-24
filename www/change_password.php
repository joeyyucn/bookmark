<?php
/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 6:08 PM
 */

$method = $_SERVER["REQUEST_METHOD"];
if($method == 'GET')
{
    session_start();
    if(!is_login())
    {

    }
}