<?php

$username = 'root';
$password = '';
$localhost = 'localhost';
$database_name = 'weeklyreport';

$link = mysql_connect($localhost, $username, $password);

if ($link) {
	mysql_select_db($database_name, $link) or die(mysql_error());
	echo 'Connected successfully';
}
// mysql_close($link);
?>