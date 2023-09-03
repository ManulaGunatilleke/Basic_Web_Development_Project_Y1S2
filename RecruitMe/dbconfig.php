<!--IT21321436 Gunatilleke M. B. D. S-->
<?php

$ServerName = '127.0.0.1';
$UserName = 'root';
$Password = '';
$dbName = 'recruitme';

//Create Connection
$con=new mysqli($ServerName,$UserName,$Password,$dbName);

// Check connection
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}


?>
