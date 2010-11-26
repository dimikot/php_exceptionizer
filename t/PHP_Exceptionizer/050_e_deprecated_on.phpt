--TEST--
PHP_Exceptionizer: processing of turned on E_DEPRECATED
--FILE--
<?php
require dirname(__FILE__) . '/init.php';
error_reporting(E_ALL);

try {
	ereg("a", "");
} catch (E_DEPRECATED $e) {
	echo "Error: " . $e->getMessage();
}

?>

--EXPECT--
Error: Function ereg() is deprecated
