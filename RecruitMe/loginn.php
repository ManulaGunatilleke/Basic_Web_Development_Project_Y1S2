


<?php

$conn = mysqli_connect('localhost', 'root', '', 'useraccounts');

if(isset($_POST['email'])){

$mail = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$mail' AND password='$pass' limit 1";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
	echo '<script language="javascript">';
	echo 'alert("You have successfully logged in")';
	echo '</script>';

	exit();
}
else{
	echo '<script language="javascript">';
    echo 'alert("Wrong email or password")';
    echo '</script>';

	exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<link rel="stylesheet" href="CSS\loginn.css">
</head>
<body>
<img src="images\poster.JPG" alt="poster">
<div class="container">
<form action="#" method="post">
<h2>Sign into your account</h2>
</br></br>
<div class="form-group">
<label for="">Email</label>
<input type="email" id="email" class="form-control" name="email" required>
</div>
</br></br>
<div class="form-group">
<label for="">Password</label>
<input type="password" id="password" class="form-control" name="password" required>
</div>
</br></br>
<input type="submit" value="login" class="btn">
<div>
</br>
<p>Don't have an account?<a href="form.php">Sign Up</a></p>
</div
</form>
</div>
</body>
</html>