<?php
if (!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
    || $_SERVER['PHP_AUTH_USER'] !== 'ln'
    || $_SERVER['PHP_AUTH_PW']   !== '1040')
{
    header('WWW-Authenticate: Basic realm="Who are you?"');
    header('HTTP/1.0 401 Unauthorized');
    die('Access denied');
}
?>
