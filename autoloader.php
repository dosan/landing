<?php
function __autoload($class_name) {
	$filename = $_SERVER['DOCUMENT_ROOT'].'/'.strtolower($class_name) . '.php';
	if (file_exists($filename) == false) {
		return false;
	}
	include($filename);
}