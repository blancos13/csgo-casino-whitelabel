<?php
	try {
		$db = new PDO('mysql:host=127.0.0.1;dbname=growbet', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	} catch (PDOException $e) {
		exit($e->getMessage());
	}
?>