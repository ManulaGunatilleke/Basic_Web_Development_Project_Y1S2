<html>
<body>

<h2>User Management<h2>
<table width = '80%' border='1'>
   <tr>
     <th>ID</th>
	 <th>Name</th>
	 <th>Email</th>
	 <th>update</th>
   </tr>
   
<?php

require 'dbconfig.php';

$sql= "Select * From users Order By user_id DESC;";
$result = mysqli_query($con,$sql);//to Check wether data inserted or not we can use another way as well

/*other method to Check wether data inserted or not
if($con->query($sql)){
echo "Inserted successfully";
}
else{
echo "Error:". $con->error;
}
}*/

//output Data for each row
if($result->num_rows > 0){

  while($row = $result->fetch_assoc())
  {
    echo ("<tr>");
    echo ("<td>". $row['user_id']. "</td>");
    echo ("<td>" . $row['user_name'] . "</td>");
    echo ("<td>" . $row['email'] . "</td>");
	echo ("<td> . <a href= 'Edituserbyadmin.php?id=$row[user_id]'>Edit</a> | <a href= 'Deleteuserbyadmin.php?id=$row[user_id]'>Delete</a>. </td>");
    echo ("</tr>");
  }
}
else
{
  echo "no results";
}

?>

</table>
</br>
   <a href= "HomePage.php" >Go to Your home page</a>
   
</body>
</html>