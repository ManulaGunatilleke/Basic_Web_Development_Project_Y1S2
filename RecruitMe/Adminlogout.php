<!--IT21321436 Gunatilleke M. B. D. S-->
<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: Adminlogin.php");
die;