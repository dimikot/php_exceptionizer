--TEST--
PHP_Exceptionizer: turn off Exceptionizer
--FILE--
<?php
require dirname(__FILE__) . '/init.php';
$exceptionizer = null;
echo $undefinedVar;
?>
--EXPECTF--
Notice: Undefined variable: undefinedVar in %s
