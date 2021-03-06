<?php

$host	= "localhost";
$db	= "simaya";
$user	= "root";
$pass	= "";
$state	= "devel"; //production

// set main and base url config
define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] . "/");
// define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] . "/batik/");//asli //server
// set application state
define("STATE", $state);
// set auth key
define("KEY", "rainbow");

// config db connect
$dbcon = "mysql:host=$host;dbname=$db;";

try {
	$pdo = new PDO($dbcon, $user, $pass);
	// Sets encoding UTF-8
	$pdo->exec("SET CHARACTER SET utf8");
	// set the PDO error mode to exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	if ($state == 'devel') {
		echo "Error: " . $e->getMessage();
	} elseif ($state == 'production') {
		echo "upss.. eror occur";
	} else {
		echo "get out please ..";
	}
}

// config erro reporting
if ($state = 'devel') :
	error_reporting(1);
else :
	error_reporting(0);
endif;

// server should keep s3ssion data for AT LEAST 1 (h 0 v r)
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their s3ssion id for EXACTLY 1 (h 0 v r)
session_set_cookie_params(3600);

// set s3ssion st4rt
session_start();
