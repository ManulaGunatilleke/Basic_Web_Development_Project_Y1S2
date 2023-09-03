<!--IT21321436 Gunatilleke M. B. D. S-->
<?php 

require 'dbconfig.php';

if(isset($_POST["Update"])){
$userID = $_POST["user_id"];
$userName= $_POST["user_name"];
$useremail = $_POST["email"];

$result = mysqli_query($con,"Update users Set user_name = '$userName', email = '$useremail' Where user_id = '$userID';"); //to Update user data (In this way We did not use a variable like $sql to update we directly use Command)

//redirect to home page to updated user in list
header("Location: Usermanage.php");
}
?>

<?php

//Disply selected user data based on id
//Getting id from url
$ID = $_GET['id'];

//Fetch user data based on id

$result = mysqli_query($con," Select* From users Where user_id = '$ID';");

while($row = mysqli_fetch_array($result))
{
  
   $user_name = $row['user_name']; 
   $user_email = $row['email'];
   
   
}
	
?>

<!--IT21321436 Gunatilleke M. B. D. S-->


<html>
<body>

<form name='Update_User' method="post" action="Edituserbyadmin.php">
 <table border = '0'>
   <tr>
     <td><label for="loginUser">Username</label></td>       
	 <td><input type="text" name="user_name" id="loginUser" value ='<?php echo $user_name; ?>'> </td>
   </tr>
   <tr>
     <td><label for="uemail">Email</label></td>       
	 <td><input type="text" name="email" id="uemail" value ='<?php echo $user_email; ?>'> </td>
   </tr>
   <tr>
     <td><input type='hidden' name='user_id' value='<?php echo $_GET['id']; ?>'></td>
	 <td><input type='submit' name='Update' value='Update'></td>
	 <td><input type="reset" value="Reset all data"></td>
   </tr>
 </table>

</form>