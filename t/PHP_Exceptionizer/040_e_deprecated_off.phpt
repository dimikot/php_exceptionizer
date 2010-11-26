--TEST--
PHP_Exceptionizer: processing of turned off E_DEPRECATED
--FILE--
<?php
require dirname(__FILE__) . '/init.php';
error_reporting(E_ALL & ~E_DEPRECATED);

try {
	ereg("a", "");
} catch (E_DEPRECATED $e) {
	echo "Error: " . $e->getMessage();
}

?>

--EXPECT--
