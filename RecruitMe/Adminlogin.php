<!--IT21321436 Gunatilleke M. B. D. S-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CS/Adminlogin.css">
  <title>Login Form </title>
</head>
<body>
  
  <div class="login-wrapper">
    <form method="post" class="form">
      <h2>Admin Login</h2>
      <div class="input-group">
	  
	    <label for="loginUser">Username</label>
        <input type="text" name="user_name" id="loginUser" required>
        
      </div>
      <div class="input-group">
	  
	    <label for="loginPassword">Password</label>
        <input type="password" name="password" id="loginPassword" required>
       
      </div>
      <input type="submit" value="Login" name = "submit" class="submit-btn"> <br>
	  <p><a href= "HomePage.php" >Go to Your home page</a></p>
    </form>
</body>
</html>
<?php 

session_start();

  include('dbconfig.php');
	include("Adminfunction.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$sql = "SELECT * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $sql);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Usermanage.php");
						
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
    
	}
  

?>