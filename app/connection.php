<?php
$hostname='localhost';
$dbname='info';
$dbuser='root';
$dbpass='';
$con = mysql_connect($hostname, $dbuser , $dbpass);
if(!$con)
{
	die('Could not connnect'.mysql_error());
}

$dbcon = mysql_select_db($dbname);

if(!$dbcon)
{
	die('Could not connnect'.mysql_error());
}











?>