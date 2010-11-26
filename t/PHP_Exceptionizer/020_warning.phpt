--TEST--
PHP_Exceptionizer: catch notice as warning
--FILE--
<?php
require dirname(__FILE__) . '/init.php';
try {
	echo $undefinedVar;
} catch (E_WARNING $e) {
	echo "Notice: " . $e->getMessage() . " on " . basename($e->getFile()) . ", line " . $e->getLine();
}

?>
--EXPECT--
Notice: Undefined variable: undefinedVar on 020_warning.php, line 4
