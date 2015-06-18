<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'websecurity';
$db_ports		= '3307' ;

/* End config */

// Create connection
$conn = @mysql_connect($db_host,$db_user,$db_pass, $db_ports);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>