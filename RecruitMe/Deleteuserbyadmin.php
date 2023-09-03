<!--IT21321436 Gunatilleke M. B. D. S-->
<?php

//include database connection file
require 'dbconfig.php';

//Get id from url to Delete student
$ID = $_GET['id'];

//Delete student row from table based on given id
$result = mysqli_query($con,"Delete From users Where user_id = '$ID';"); //to Update user data (In this way We did not use a variable like $sql to update we directly use Command)

//After delete redirect to home,so that latest user list will be displayed
header("Location: Usermanage.php");

?>