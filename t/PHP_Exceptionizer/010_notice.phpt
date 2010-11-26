--TEST--
PHP_Exceptionizer: notice catch
--FILE--
<?php
require dirname(__FILE__) . '/init.php';
try {
	echo $undefinedVar;
} catch (E_NOTICE $e) {
	echo "Notice: " . $e->getMessage() . " on " . basename($e->getFile()) . ", line " . $e->getLine();
}

?>
--EXPECT--
Notice: Undefined variable: undefinedVar on 010_notice.php, line 4
