


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS\form.css">
	 <title>Sign Up</title>
   </head>
<body>


  <div class="container">
    <div class="title">Create A New Account</div></br>
    <div class="content">
      <form action="connect.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <label for="firstname" class="details">First Name</label>
            <input type="text" name="firstname" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <label for="lastname" class="details">Last Name</label>
            <input type="text" name="lastname" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <label for="email" class="details">Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <label for="contactno" class="details">Contact Number</label>
            <input type="number" name="contactno" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <label for="password" class="details">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <label class="details">Confirm Password</label>
            <input type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="Other" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
		</br>
		<div class="checkbox" >
            <input type="checkbox" id="">
            <label for="">All the details entered are correct</label>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
  
  
</body>
</html>

