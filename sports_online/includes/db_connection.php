<?php
// create constant instead of variables so that they will not change
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","widget_corp");
//1. Create a database connection
/*
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="widget_corp";
*/
$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(mysqli_connect_errno()) 
{
	die("database connection failed:" .
	mysqli_connect_error() .
	"(".mysqli_connect_errno() . ")"
	);
}
?>