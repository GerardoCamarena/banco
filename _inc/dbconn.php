<?php
$serverName="localhost";
$dbusername="gcamarena";
$dbpassword="12345678";
$dbname="bank";
mysql_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysql_select_db($dbname) or die(mysql_error());
?>