--TEST--
register_new_overload() undefined callback
--SKIPIF--
<?php 
if (!extension_loaded('test_helpers')) die('skip test_helpers extension not loaded');
?>
--FILE--
<?php
class Bar {}

var_dump(register_new_overload('callback'));

var_dump(get_class(new Bar));
--EXPECTF--
Warning: register_new_overload() expects parameter 1 to be a valid callback, function 'callback' not found or invalid function name in %s on line %d
NULL
string(3) "Bar"