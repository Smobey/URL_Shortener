<?php
// Make a MySQL Connection
$ini_array = parse_ini_file("config.ini");
$username = $ini_array[username];
$password = $ini_array[password];
$host = $ini_array[host];
$dbname = $ini_array[dbname];

mysql_connect($host, $username, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

// Create MySQL tables in the selected database
mysql_query("
CREATE TABLE URLs
(
ID INT unsigned not null auto_increment,
PRIMARY KEY(ID),
URL TEXT(300) not null,
Creationdate DATETIME not null
);
")
or die(mysql_error());  

echo "Table Created!";
?>