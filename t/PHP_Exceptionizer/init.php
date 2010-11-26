<?php
header("Content-type: text/plain");
chdir(dirname(__FILE__));
include_once "../../lib/config.php";
include_once "PHP/Exceptionizer.php";

if (function_exists('xdebug_disable')) xdebug_disable();

error_reporting(E_ALL);
$exceptionizer = new PHP_Exceptionizer();
