<?php 
	
$hostname = 'localhost';
$database = 'loteria';
$username = 'root';
$password = '';

$mysqli = new mysqli($hostname, $username,$password, $database);
if ($mysqli -> connect_errno) {
die( "Fallo la conexiÃ³n a MySQL: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}
else

 ?>