<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'delight';

$connect = mysql_connect($host,$username,$password) or die('could not establish connection');

//create connection to database
$db = mysql_select_db($dbname,$connect);

if(!$db)
{
  die('unknown database '.$dbname);
}

?>