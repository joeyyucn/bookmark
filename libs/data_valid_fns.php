<?php
/**
 * Created by PhpStorm.
 * User: JYu2
 * Date: 2/24/2017
 * Time: 5:14 PM
 */
define('EMAIL_PATTERN', '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/');
define('USER_NAME_PATTERN', '/^[A-Za-z0-9]{6, 16}$/');

function valid_email($email)
{
    return preg_match(EMAIL_PATTERN, $email) > 0;
}

function valid_username($username)
{
    return preg_match(USER_NAME_PATTERN, $username) > 0;
}

