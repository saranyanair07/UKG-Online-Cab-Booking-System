<?php
define("MYSQL_SERVER", "cloudneethu.mysql.database.azure.com");
define("MYSQL_USER", "cloudneethu");
define("MYSQL_PASSWORD", "Krishna2002#");
define("MYSQL_DATABASE", "dukgcab");

$mysqli = new mysqli(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD) or die ('I cannot connect to the database because 1: ' . $mysqli->error);

$mysqli->select_db(MYSQL_DATABASE) or die ('I cannot connect to the database because 2: ' . $mysqli->error);

?>
