<?php

$servername = "rdbms.strato.de";
$username = "U3084260";
$dbpass = "Bruiloft1";
$dbname = "DB3084260";

$err_level = error_reporting(0);
$db = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$db) {
    echo("Connection failed");
}
error_reporting($err_level);
?>